<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Order::class, function (Faker $faker) {
    return [
        'ID'=>$faker->phoneNumber,
        'CustomerID' =>$faker->password,
        'OrderDate' =>$faker->dateTime,
        'RequiredDate' =>$faker->dateTime,
        'ShippedDate' =>$faker->dateTime,
        'Status' =>$faker->state,
        'Comments' =>$faker->sentence,
    ];
});
