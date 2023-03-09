<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function listFiles(): View|Factory|Application
    {
        $user = auth()->user();
        $files = $user->files()->latest()->get();
        return view('layouts.list.index', compact('files'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
        ]);

        $path = $validated['file']->store('uploads');

        $file = new File([
            'name' => $validated['file']->getClientOriginalName(),
            'path' => $path,
        ]);

        $user = auth()->user();
        $user->files()->save($file);

        return redirect()->route('layouts.file.index')->with('success', 'File uploaded successfully.');
    }

    /**
     * @param $id
     * @return BinaryFileResponse
     */
    public function download($id): BinaryFileResponse
    {
        $file = File::find($id);
        $path = Storage::disk('public')->path($file->path);
        $originalName = decrypt($file->name);

        return response()->download($path, $originalName);
    }

    public function delete($id): RedirectResponse
    {
        $file = File::findOrFail($id);
        Storage::disk('public')->delete($file->path);
        $file->delete();
        return redirect('files')->with('success', 'File deleted successfully.');
    }

    public function search(Request $request): Factory|View|Application
    {
        $user = auth()->user();
        $searchQuery = $request->input('q');
        $files = $user->files()
            ->where('name', 'like', '%'.$searchQuery.'%')
            ->latest()
            ->get();

        return view('layouts.list.index', compact('files', 'searchQuery'));
    }



}
