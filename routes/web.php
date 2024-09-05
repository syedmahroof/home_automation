<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinoutController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pin/{pinNumber}/on', [PinoutController::class, 'turnOnPin']);
Route::get('/pin/{pinNumber}/off', [PinoutController::class, 'turnOffPin']);
Route::get('/pin/{pinNumber}/state', [PinoutController::class, 'checkPinState']);
