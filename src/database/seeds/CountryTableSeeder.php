<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
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
            'USA',
            'Honduras',
            'Marlboro',
            'Holland'
        ];

        foreach ($countries as $country)
        {
            \Illuminate\Support\Facades\DB::table('countries')->insert(['country' => $country]);
        }
    }
}
