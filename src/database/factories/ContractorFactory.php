<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Contractor::class, function (Faker $faker) {
    return [
        'phone' => $faker->e164PhoneNumber,
        'name' => $faker->company,
        'photo' => '/storage/images/test.jpeg',
        'legal_address' => $faker->address,
        'actual_address' => $faker->address,
        'registration_date' => $faker->date('Y-m-d', $max='now'),
        'tin' => $faker->numberBetween(1111111111, 99999999999),
        'mes_license_photo' => '/storage/images/test.jpeg',
        'mes_license_number' => $faker->numberBetween(11111111, 99999999),
        'mes_license_date' => $faker->date(),
        'ira_accreditation_photo' => '/storage/images/test.jpeg',
        'ira_accreditation_number' => $faker->numberBetween(11111111, 99999999),
        'ira_accreditation_date' => $faker->date(),
        'electric_laboratory_license_photo' => '/storage/images/test.jpeg',
        'electric_laboratory_license_number' => $faker->numberBetween(11111111, 99999999),
        'electric_laboratory_license_date' => $faker->date(),
        'educational_license_photo' => '/storage/images/test.jpeg',
        'educational_license_number' => $faker->numberBetween(11111111, 99999999),
        'educational_license_date' => $faker->date(),
        'information' => $faker->realText()
    ];
});
