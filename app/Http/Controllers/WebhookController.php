<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    
    function verify(Request $request){

        Log::info("verify");
        Log::info($request->toArray());

    }

    function messenger(Request $request){

        Log::info("messenger");
        Log::info($request->toArray());

    }

}
