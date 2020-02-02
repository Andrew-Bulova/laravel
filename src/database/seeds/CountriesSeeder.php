<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            'Ukraine',
            'Russia',
            'Usa',
            'Poland',
            'Brazil'
        ];

        foreach ($countries as $country)
        {
            DB::table('countries')->insert(['name'=>$country]);
        }
    }
}
