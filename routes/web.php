<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/add', [ContactController::class, 'index']);
Route::post('/add', [ContactController::class, 'create']);


