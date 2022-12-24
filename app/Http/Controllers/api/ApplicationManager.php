<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationManager extends Controller
{
    public function getAppDetails(Request $request){
        $input = $request->all();

    }
}
