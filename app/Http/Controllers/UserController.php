<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function showRegistrationForm(): View|Factory|Application
    {
        return view('layouts.register.index');
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function register(Request $request): Redirector|RedirectResponse|Application
    {
        $this->validate($request, [
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',

        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login')->with('success', 'You have successfully registered.');
    }

    /**
     * @return Application|Factory|View
     */
    public function showLoginForm(): View|Factory|Application
    {
        return view('layouts.login.index');
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function login(Request $request): Redirector|RedirectResponse|Application
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->intended('/files');
        } else {
            return redirect('/login')->with('error', 'Invalid login credentials.');
        }
    }

    /**
     * @return Application|RedirectResponse|Redirector
     */
    public function logout(): Redirector|RedirectResponse|Application
    {
        auth()->logout();
        return redirect('/');
    }

    /**
     * @return Application|Factory|View
     */
    public function showEditForm(): View|Factory|Application
    {
        $user = auth()->user();
        return view('layouts.user_account.index', compact('user'));
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function update(Request $request): Redirector|RedirectResponse|Application
    {
        $user = auth()->user();

        $this->validate($request, [
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|confirmed|min:6',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect('/user')->with('success', 'Your account has been updated.');
    }

}
