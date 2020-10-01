<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/order/{id}", [OrderController::class, 'destroy']);
Route::get("/order/status/{id}/{status}", [OrderController::class, 'update']);


Auth::routes();

Route::get('/home', [OrderController::class, 'index'])->name('order');

Route::get('/about', function(){
    return view("about");
});

Route::get('/contact', function(){
    return view("contact");
});