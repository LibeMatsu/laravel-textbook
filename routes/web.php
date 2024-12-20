<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

// Route::get('post/create', [PostController::class, 'create'])->middleware(['auth', 'admin']);
// Route::post('post', [PostController::class, 'store']) ->name('post.store');
// Route::get('post', [PostController::class, 'index']) ->name('post.index');
// Route::get('post/show/{post}', [PostController::class, 'show']) ->name('post.show');
// Route::get('post/{post}/edit', [PostController::class, 'edit']) ->name('post.edit');
// Route::patch('post/{post}', [PostController::class, 'update']) ->name('post.update');
// Route::delete('post/{post}', [PostController::class, 'destroy']) ->name('post.destroy');

Route::resource('post', PostController::class);