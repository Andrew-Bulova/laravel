<?php

use App\Attribute;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $this->call(AttributeSeeder::class);
        $this->call(RoleSeeder::class);

        $attributes = Attribute::pluck('attribute')->toArray();

        factory(\App\User::class,20)->create();
        factory(\App\Contractor::class,20)->create();
        factory(\App\Feedback::class, 200)->create();
        factory(\App\Requirement::class,20)->create();
        factory(\App\Entity::class, 50)->create();
        factory(\App\Building::class, 200)->create()->each(function ($building) use ($attributes){
            foreach ($attributes as $attribute){
                DB::table('building_attribute')->insert([
                    'building_id' => $building->id,
                    'attribute' =>$attribute,
                    'value' => array_rand([false, true])
                ]);
            }
        });

    }
}
