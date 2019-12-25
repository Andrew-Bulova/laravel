<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public $city = 'Kyiv';
    public $weather;

    public function index()
    {
        $this->getWeather($this->city);
        return view('layouts.weather', ['city' => $this->weather['name'],
                                'weather' => $this->weather['weather'][0]['description'],
                                'temperature' => $this->weather['main']['temp']]);
    }

    public function showWeather(Request $request)
    {
        $this->city = $request->input('city');
        $this->getWeather($this->city);
        return view('layouts.weather', ['city' => $this->weather['name'],
                                        'weather' => $this->weather['weather'][0]['description'],
                                        'temperature' => $this->weather['main']['temp']]);
    }

    protected function getWeather(string $city):array
    {
        $url = $this->url($city);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $weather = curl_exec($curl);
        curl_close($curl);
        $weather = json_decode($weather, true);
        $weather['main']['temp'] -= 273;

        return $this->weather = $weather;
    }

    protected function url($city) {
        $url = config('config.weather');

        return $url['pre_arg'].$city.$url['post_arg'].$url['token'];
    }
}
