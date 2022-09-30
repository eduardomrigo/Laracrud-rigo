<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\VehicleController;
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



Route::get('/',[VehicleController::class,'index']); //chama a funcao index da controller ao acessar o /
Route::resource('/vehicle', VehicleController::class); //o resource permite acessar todas as funcoes da controller VehicleController nessa /vehicle
Route::resource('/brands', BrandController::class); //o resource permite acessar todas as funcoes da controller VehicleController nessa /vehicle