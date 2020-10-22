<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Pruductline::class, function (Faker $faker) {
    return [

        'ID'=> $faker->numberBetween(min(0,9999),max(89998797898,6)),
        'DescInText' =>$faker->word,
        'Image'=>$faker->image(dir(null))


    ];
});
