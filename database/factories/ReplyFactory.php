<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        //
        'tweet_id' => factory(App\Tweet::class),
        'user_id' => factory(App\User::class),
        'body' => $faker->sentence
    ];
});
