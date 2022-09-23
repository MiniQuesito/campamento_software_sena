<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bootcampController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\reviewsController;

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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Clase Route: Encargada de rutas
//Metodo apiResource:: Crear rutas de cambio de estado para una entidad
Route::apiResource('bootcamps',bootcampController::class);

//Clase Route: Encargada de rutas
//Metodo apiResource:: Crear rutas de cambio de estado para una entidad
Route::apiResource('courses',coursesController::class);

//Clase Route: Encargada de rutas
//Metodo apiResource:: Crear rutas de cambio de estado para una entidad
Route::apiResource('reviews',reviewsController::class);