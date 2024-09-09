<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DivisiController;
use App\Http\Controllers\Api\KaryawanController;


Route::group(['prefix' => 'api', 'as' => 'api.'], function () {
	Route::apiResource('divisi', DivisiController::class);
	Route::apiResource('karyawan', KaryawanController::class);
});