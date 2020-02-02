<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Requests\BookRequest;
use App\Model;
use Faker\Generator as Faker;
use App\PublisherModel as Publisher;
use App\AuthorModel as Author;

$factory->define(\App\BookModel::class, function (Faker $faker) {
    return [
        'name' => $faker ->title,
        'year' => $faker -> numberBetween(1800, BookRequest::nowYear()),
        'publisher_id' => $faker -> randomElement(Publisher::all()) -> id,
        'author_id' => $faker -> randomElement(Author::all()) -> id
    ];
});
