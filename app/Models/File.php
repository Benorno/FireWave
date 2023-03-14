<?php

namespace App\Models;

use http\Client\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    //returns user who uploaded the file
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'files';

    //returns file size in bytes
    public function getSize(): int
    {
        return Storage::size($this->path);
    }

    //converts bytes to human-readable format
    public function getSizeFormatted(): string
    {
        $sizeInBytes = $this->size;
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        if ($sizeInBytes === 0) {
            return '0 B';
        }

        $index = floor(log($sizeInBytes, 1024));
        $size = $sizeInBytes / (1024 ** $index);

        //round to 2 decimal places if size is greater than 1 KB
        if ($index === 0) {
            $formattedSize = round($size) . ' ' . $units[$index];
        } else {
            $formattedSize = round($size, 2) . ' ' . $units[$index];
        }

        return $formattedSize;
    }




}
