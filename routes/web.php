<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/run-migrate', function () {
//     Artisan::call('migrate', ["--force" => true]);
//     return "Migration berhasil dijalankan!";
// });
// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);
