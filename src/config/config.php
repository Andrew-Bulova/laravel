<?php
return [
    'weather' => [
        'pre_arg' =>'api.openweathermap.org/data/2.5/weather?q=',
        'post_arg' => ',uk&APPID=',
        'token' => env('API_KEY', '')
    ]
];
