<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeatherData(Request $request)
    {
        $apiKey = 'b30682813b0e472f167bbda04dde16d2';
        $city = $request->input('city');


        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey");

        if ($response->ok()) {
            return $response->json();
        } else {
            return response()->json(['error' => 'Weather data not found'], 404);
        }
    }

}
