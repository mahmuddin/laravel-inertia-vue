<?php

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

Route::get('/', [PostController::class, 'index']);
Route::get('post/create', [PostController::class, 'create']);
Route::get('post/show/{post}', [PostController::class, 'show']);
Route::post('post', [PostController::class, 'store']);
Route::get('post/edit/{post}', [PostController::class, 'edit']);
Route::put('post/update/{post}', [PostController::class, 'update']);
Route::delete('post/delete/{post}', [PostController::class, 'destroy']);
