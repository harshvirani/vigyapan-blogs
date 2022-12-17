<?php

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


use App\Http\Controllers\api\VPNController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "endpoint";
});
Route::group(['prefix' => 'allservers'], function () {
    Route::get('/', [VPNController::class, "allVPNServer"]);
    Route::get('/free',  [VPNController::class, "allVPNFreeServer"]);
    Route::get('/pro', [VPNController::class, "allVPNProServer"]);
});


Route::get('/detail/{id}',  [VPNController::class, "detailVpn"]);
Route::get('/detail/random',  [VPNController::class, "randomVpn"]);

Route::get('/animal-sound',[\App\Http\Controllers\api\AnimalAppController::class,'getSoundList']);
a
