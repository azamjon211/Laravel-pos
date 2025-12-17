<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/girl', [UserController::class, 'index']);
Route::get('/create', [UserController::class, 'create']);
Route::get('/girl/{name}', [UserController::class, 'show']);
Route::get('/men/{user}', [UserController::class, 'explain']);
route::post('/user-create', [UserController::class, 'store']);
