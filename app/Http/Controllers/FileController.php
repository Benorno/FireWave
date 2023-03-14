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
    //list all files
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
    //stores file in storage
    public function store(Request $request): RedirectResponse
    {
        //store file in storage
        $path = $request->file('file')->store('public/files');

        //store file in database
        $file = new File([
            'name' => encrypt($request->file('file')->getClientOriginalName()),
            'path' => $path,
            'size' => $request->file('file')->getSize(),
        ]);

        //associate file with user
        $user = auth()->user();
        $user->files()->save($file);

        return redirect()->route('layouts.file.index')->with('success', 'File uploaded successfully.');
    }

    /**
     * @param $id
     * @return BinaryFileResponse
     */
    //downloads file
    public function download($id): BinaryFileResponse
    {
        //get file from database
        $file = File::find($id);

        //get file from storage
        $path = Storage::disk('public')->path($file->path);

        return response()->download($path);
    }

    //deletes file
    public function delete($id): RedirectResponse
    {
        //get file from database
        $file = File::findOrFail($id);

        //delete file from storage
        Storage::disk('public')->delete($file->path);

        //delete file from database
        $file->delete();

        return redirect('files')->with('success', 'File deleted successfully.');
    }

    //searches for files
    public function search(Request $request): Factory|View|Application
    {
        //get user
        $user = auth()->user();

        //get search query
        $searchQuery = $request->input('q');

        //search for files
        $files = $user->files()
            ->where('name', 'like', '%'.$searchQuery.'%')
            ->latest()
            ->get();

        return view('layouts.list.index', compact('files', 'searchQuery'));
    }

}
