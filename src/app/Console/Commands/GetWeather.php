<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetWeather extends Command
{
    protected $url;
    protected $curl;
    protected $city;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get_weather {city}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get current weather';

    /**
     * Create a new command instance.
     *
     * @param string $city
     */
    public function __construct()
    {
        parent::__construct();

        $this->curl = curl_init();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->city = $this->argument('city');
        $this->url = "api.openweathermap.org/data/2.5/weather?q=$this->city&APPID=9b10564d08588e768adcf692c6ed10fa";
        curl_setopt($this->curl, CURLOPT_URL, $this->url);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        $weather = curl_exec($this->curl);
        $weather = json_decode($weather, true);
        $weather['main']['temp'] -= 273;
        $this->info("In {$weather['name']} is {$weather['weather'][0]['description']} and temperature - {$weather['main']['temp']}");
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        curl_close($this->curl);
    }
}

