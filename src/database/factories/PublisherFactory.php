<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\CityModel as City;
use App\OwnerModel as Owner;


$factory->define(\App\PublisherModel::class, function (Faker $faker)
{
    return [
        'name'    => $faker->title,
        'city_id' => $faker->randomElement(City::all())->id,
        'owner_id' => $faker->randomElement(Owner::all())->id
    ];
});
