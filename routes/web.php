<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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
/*
|------------------------------------------------------------------------------|
|                             Web Routs                                        |
|------------------------------------------------------------------------------|
|                                                                              |
|                                                                              |
|                                                                              |
|                                                                              |
|------------------------------------------------------------------------------|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-message', [MessageController::class,'send_message'])->name('send_message');
Route::post('send',[MessageController::class,'send'])->name('send');

















