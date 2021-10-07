<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    
    function verify(Request $request){

        Log::info("verify");
        Log::info($request->toArray());
        
        if ($request->{"hub.verify_token"} === env("VERIFICATION_TOKEN")) {
            return response()->json($request->{'hub.challenge'}, 200);
        }else{

            return response()->json(['error' => 'Not authorized.'],403);

        }

        

    }

    function messenger(Request $request){

        Log::info("messenger");
        Log::info($request->toArray());

    }

}
