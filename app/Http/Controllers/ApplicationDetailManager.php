<?php

namespace App\Http\Controllers;

use App\Models\AppDetail;
use Illuminate\Http\Request;

class ApplicationDetailManager extends Controller
{
    public function getAppDetails(Request $request){
        $packageName = $request->package;
        $packageDetail = AppDetail::query()->where('package_name',$packageName)->first();
        return response()->json($packageDetail->package_json??[]);
    }
}
