<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Feedback::class, function (Faker $faker) {
    $target =  $faker->randomElement(['User', 'Contractor']);
    switch ($target){
        case 'User':
            $target_id = \App\User::all()->random()->id;
            break;
        case 'Contractor':
            $target_id = App\Contractor::all()->random()->id;
    }

    return [
        'target_type' => $target,
        'target_id' => $target_id,
        'feedback' => $faker->paragraph,
        'rating' =>$faker->numberBetween($min=1, $max=5)
    ];
});
