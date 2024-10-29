<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;
use App\Http\Controllers\DepanController;

Route::get('/', function () {
    return 'hello world';
});

Route::get('/task', [TaskController::class, 'index']);
Route::get('/depan', [DepanController::class, 'index']);