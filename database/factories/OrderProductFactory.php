<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Order_Product::class, function (Faker $faker) {
    return [
        'ID'=>$faker->password,
        'OrderID' =>$faker->word,
        'ProductCode' =>$faker->word,
        'Qty' =>$faker->randomNumber(7),
        'PriceEach' =>$faker->numberBetween(0,15)

    ];
});
