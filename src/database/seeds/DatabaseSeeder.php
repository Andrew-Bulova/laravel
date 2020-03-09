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
        $this->call(OverUsersTableSeeder::class);

        factory(\App\User::class,100)->create();
        factory(\App\Contractor::class,100)->create();
        factory(\App\Feedback::class, 1000)->create();
        factory(\App\Requirement::class,20)->create();
        factory(\App\Entity::class, 250)->create();
    }
}
