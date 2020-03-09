<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Entity::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(\App\User::all())->id,
        'name' => $faker->name,
        'legal_address' => $faker->address,
        'tin' => $faker->numberBetween(1111111111, 9999999999),
        'contact_person' => $faker->name,
        'head_position' => Str::random(10),
        'head_name' => $faker->name,
        'phone' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail
    ];
});
