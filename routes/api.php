<?php

use App\Http\Controllers\Api\OrderApiController;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->get('/order', [OrderApiController::class, 'index']);
Route::middleware('auth:api')->post('/order', [OrderApiController::class, 'store']);
Route::middleware('auth:api')->delete('/order/{id}', [OrderApiController::class, 'destroy']);

