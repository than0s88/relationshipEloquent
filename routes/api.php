<?php

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

//Route::get('/query/1', [\App\Http\Controllers\QueryController::class, 'allGuardians']);
//Route::get('/query/2', [\App\Http\Controllers\QueryController::class, 'allChildren']);
//Route::get('/query/3', [\App\Http\Controllers\QueryController::class, 'allSchool']);
//Route::get('/query/4', [\App\Http\Controllers\QueryController::class, 'guardianWithChildrend']);


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function() {
    Route::apiResource('guardians', GuardianController::class);
    Route::apiResource('childrens', ChildrenController::class);
});
