<?php /** @noinspection PhpUndefinedFieldInspection */

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function upload(Request $request): RedirectResponse
    {
        //store file in storage
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('public/files', $filename);

        //store file in database
        $file = new File();
        $file->name = $filename;
        $file->path = $path;
        $file->size = $file->getSize();
        $file->user_id = auth()->user()->id;
        $file->save();

        return redirect('files')->with('success', 'File uploaded successfully.');
    }

}
