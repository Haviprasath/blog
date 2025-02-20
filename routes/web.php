<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('hello');
});
Route::get('/index',[PostController::class,'index']);
Route::get('/detail/{id}',[PostController::class,'detail'])->name('post.detail');
