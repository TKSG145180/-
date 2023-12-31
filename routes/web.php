<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [Postcontroller::class, 'index'])->middleware('auth');
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/management', [PostController::class, 'management']);
Route::get('/posts/list',[PostController::class, 'list']);
Route::get('/posts/password', [PostController::class, 'password']);
Route::get('/posts/show', [PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store']);
Route::put('/posts/{shift}', [PostController::class, 'update']);
Route::delete('/posts/{shift}', [PostController::class,'delete']);
Route::get('/posts/{shift}/edit', [PostController::class, 'edit']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
