<?php

namespace App\Models;

use http\Client\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

/**
 * @property mixed|string $name
 * @property false|mixed|string $path
 * @property mixed $user_id
 * @method static latest()
 * @method static findOrFail($id)
 * @method static find($id)
 */
class File extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'files';


    public function store(Request $request) : RedirectResponse
    {

        // Get the authenticated user
        $user = Auth::user();

        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
        ]);

        // Store the uploaded file
        $path = $request->file('file')->store('public/files');

        // Create a new File model and associate it with the user
        $file = new File();
        $filename = $file->name = $request->file('file')->getClientOriginalName();
        $file->path = $path;
        $file->user_id = $user->id;
        $file->save();

        $encryptedName = encrypt($filename);
        $file->name = $encryptedName;


        // Redirect back to the upload form with a success message
        return redirect()->route('upload')->with('success', 'File uploaded successfully!');
    }
}
