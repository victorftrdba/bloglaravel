<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/nova-postagem', [PostController::class, 'add'])->name('blog.add');
Route::post('/blog/inserir', [PostController::class, 'store'])->name('blog.store');
Route::get('/blog/editar/{id}', [PostController::class, 'edit'])->name('blog.edit');
Route::put('/blog/editar/{id}', [PostController::class, 'update'])->name('blog.update');
Route::delete('/blog/delete/{id}', [PostController::class, 'delete'])->name('blog.delete');