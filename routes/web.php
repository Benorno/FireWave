<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Models\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Authentication Routes
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');
Route::get('/contacts', function () {
    return view('layouts.contacts');
})->name('contacts');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/upload', function () {
        return view('layouts.upload.index');
    },)->name('upload');
    Route::post('/upload', [FileUploadController::class, 'upload'])->name('file.upload');
    Route::get('/files', [FileController::class, 'listFiles'])->name('files');
    Route::get('/file/{id}/download', [FileController::class, 'download'])->name('file.download');
    Route::get('/files/{id}/download', function ($id) {
        $file = File::find($id);
        $path = storage_path('app/' . $file->path);
        return response()->download($path);
    })->name('download');
    Route::delete('/files/{id}/delete', [FileController::class, 'delete'])->name('file.delete');
    Route::get('/files/search', [FileController::class, 'search'])->name('files.search');
    Route::get('/user', [UserController::class, 'showEditForm'])->name('user.show');
    Route::post('/user', [UserController::class, 'update'])->name('user.update');
});


