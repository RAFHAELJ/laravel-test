<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
Route::get('/lista',[TaskController::class, 'index']);
Route::get('/item/{id}',[TaskController::class, 'show']);
Route::post('/salva',[TaskController::class, 'store']);
Route::put('/update/{id}',[TaskController::class, 'update']);
Route::delete('/delete/{id}',[TaskController::class, 'destroy']);
