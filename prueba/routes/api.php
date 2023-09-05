<?php

use App\Http\Controllers\API\CiudadesController;
use App\Http\Controllers\API\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('clientes')->group(function (){
    Route::get('/', [ClienteController::class, 'getAllClientes']);
    Route::post('/createCliente', [ClienteController::class, 'createClientes']);
});

Route::prefix('ciudades')->group(function (){
    Route::get('/', [CiudadesController::class, 'getAllCiudades']);
    Route::post('/createCiudad', [ClienteController::class, 'createCiudades']);
});
