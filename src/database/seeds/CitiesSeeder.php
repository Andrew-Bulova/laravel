<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'Kyiv',
            'Moscow',
            'Washington',
            'Warsaw',
            'Brazil'
        ];
        $i=0;
        foreach ($cities as $city)
        {
            DB::table('cities')->insert(['name'=>$city, 'country_id'=>++$i]);
        }
    }
}
