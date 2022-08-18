<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\DataController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    dd(544);
    return $request->user();
});


Route::apiResources([
    'data' => DataController::class,
]);


//Route::get('/data/', [DataController::class, 'index']);


Route::get('/user/{id}', function ($id) {
    return 'api User '.$id;
});


Route::middleware('log')->get('/2', function (Request $request) {
    dd(544);
    return $request->user();
});



