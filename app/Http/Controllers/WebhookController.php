<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    
    function verify(Request $request){

        Log::info("verify");
        Log::info($request->toArray());
        
        return response()->json($request->{'hub.challenge'}, 200);

    }

    function messenger(Request $request){

        Log::info("messenger");
        Log::info($request->toArray());

    }

}
