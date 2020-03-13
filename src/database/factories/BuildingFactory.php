<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Building::class, function (Faker $faker) {

    return [
        'entity_id' => $faker->randomElement(\App\Entity::all())->id,
        'name' => $faker->name,
        'actual_address' => $faker->address,
        'registration_date' => $faker->date(),
        'appointment' => \Illuminate\Support\Str::random(15),
        'appointment_in_detail' => $faker->sentence,
        'storeys' => $faker->randomElement(range(1,5)),
        'room_location' => $faker->sentence(2),
    ];
});
