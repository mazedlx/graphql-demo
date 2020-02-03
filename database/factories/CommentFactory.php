<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Comment;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'title' => $faker->word,
        'body' => $faker->sentence,
    ];
});
