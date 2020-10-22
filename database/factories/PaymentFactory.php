<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Payment::class, function (Faker $faker) {
    return [

        'CheckNum'=>$faker->phoneNumber,
        'CustomerID' =>$faker->password,
        'PaymentDate' =>$faker->dateTime,
        'Amount' =>$faker->numberBetween(3,15)

    ];
});
