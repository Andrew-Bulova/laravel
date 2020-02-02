<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesSeeder::class);
        $this->call(CitiesSeeder::class);

        factory(\App\AuthorModel::class, 100)->create();
        factory(\App\OwnerModel::class, 100)->create();
        \App\Console\Commands\Parser::handle();
        factory(\App\BookModel::class, 1000)->create();
    }
}
