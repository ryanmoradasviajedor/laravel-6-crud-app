<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Book;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title'         => $faker->title,
        'description'   => $faker->sentence,
        'author'        => $faker->name,
    ];
});
