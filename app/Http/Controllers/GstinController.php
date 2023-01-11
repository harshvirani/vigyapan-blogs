<?php

namespace App\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class GstinController extends Controller
{
    public function getGstDetails(string $gstin){
        //Scrapped from : https://www.mastersindia.co/gst-number-search-and-gstin-verification/
        $details = \Illuminate\Support\Facades\Http::withHeaders(array(
            'authority' => 'blog-backend.mastersindia.co',
            'accept' => 'application/json, text/plain, */*',
            'accept-language' => 'en,en-US;q=0.9,it;q=0.8',
            'origin' => 'https://www.mastersindia.co',
            'referer' => 'https://www.mastersindia.co/',
            'sec-ch-ua' => '"Not?A_Brand";v="8", "Chromium";v="108", "Google Chrome";v="108"',
            'sec-ch-ua-mobile' => '?0',
            'sec-ch-ua-platform' => '"macOS"',
            'sec-fetch-dest' => 'empty',
            'sec-fetch-mode' => 'cors',
            'sec-fetch-site' => 'same-site',
            'user-agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36'
        ))->get('https://blog-backend.mastersindia.co/api/v1/custom/search/gstin/?keyword='.$gstin.'&unique_id=wcj9SdQU9cerYuA3NHKBzvscTq5T45')->json();
        return response()->json($details);
    }
}
