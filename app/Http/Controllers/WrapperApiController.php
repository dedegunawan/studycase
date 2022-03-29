<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function ping()
    {
        $json = Http::get('https://vapi.binance.com/vapi/v1/ping')->json();
        return response()->json($json);
    }

    public function time()
    {
        $json = Http::get('https://vapi.binance.com/vapi/v1/time')->json();
        return response()->json($json);
    }
}
