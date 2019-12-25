<?php
return [
    'weather' => [
        'pre_arg' =>'api.openweathermap.org/data/2.5/weather?q=',
        'post_arg' => '&APPID=',
        'token' => env('API_KEY', '')
    ]
];
