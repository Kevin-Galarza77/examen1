<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class,'index'])->name('posts.index');

Route::get('category/{category}', [PostController::class,'category'])->name('posts.category');

Route::resource('producto',ProductoController::class)->names('producto')->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/email',[MailController::class,'getMail'])->name('newEmail')->middleware('auth');
Route::get('/editMail',[MailController::class,'editMail'])->name('editMail')->middleware('auth');
Route::get('/deleteMail',[MailController::class,'deleteMail'])->name('deleteMail')->middleware('auth');