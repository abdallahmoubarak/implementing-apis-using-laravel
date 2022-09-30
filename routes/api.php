<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SortController;
use App\Http\Controllers\PlaceValueController;
use App\Http\Controllers\TranslateController;



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

Route::post("/sort", [SortController::class, 'sortString']);
Route::post("/number", [PlaceValueController::class, 'placeValue']);
Route::post("/translate", [TranslateController::class, 'translate']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
