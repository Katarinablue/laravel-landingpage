<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return 'hello world';
});

Route::get('/task', [TaskController::class, 'index']);