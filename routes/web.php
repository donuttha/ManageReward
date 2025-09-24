<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\LuckyDrawController;

Route::get('/luckydraw/register', [LuckyDrawController::class, 'showForm']);
Route::post('/luckydraw/register', [LuckyDrawController::class, 'register']);
