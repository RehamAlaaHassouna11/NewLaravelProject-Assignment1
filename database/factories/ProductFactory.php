<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'Code'=>$faker->postcode,
        'ProductLineID'=>$faker->password,
        'Name' =>$faker->name,
        'Scale' =>$faker->numberBetween(1,12),
        'Vendor' =>$faker->word,
        'PdtDescription' =>$faker->sentence,
        'QtyInStock' =>$faker->randomNumber(10),
        'BuyPrice' =>$faker->numberBetween(5,16),
        'MSRP'=> $faker->word
    ];
});
