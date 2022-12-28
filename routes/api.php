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


Route::middleware('request-track')->post('/testAppDetails',function(){
    return response()->json(json_decode('{
    "channels": {
        "facebook":{
            "banner": "IMG_16_9_APP_INSTALL#2312433698835503_2964944860251047",
            "native": "IMG_16_9_APP_INSTALL#2312433698835503_2964952163583650",
            "interstitial": "IMG_16_9_APP_INSTALL#2312433698835503_2650502525028617",
            "rewarded": "",
            "native_banner": "IMG_16_9_APP_INSTALL#2312433698835503_2964953543583512"
        },
        "admob_id":{
            "banner": "",
            "native": "",
            "interstitial": "",
            "rewarded": "",
            "native_banner": ""
        }
    },
    "other": {
        "privacy_policy":"https://dksolution104.blogspot.com/2022/08/privacypolicy.html",
        "tnc":"https://dksolution104.blogspot.com/2022/08/privacypolicy.html"
    },
    "config": {
        "list_repeat_count": 3,
        "display": true,
        "interstitial_show_click_count":2
    }
}
',1));
});//

Route::middleware('request-track')->post('/appDetails',[\App\Http\Controllers\ApplicationDetailManager::class,'getAppDetails']);
