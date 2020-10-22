<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
        'ID'=>$faker->phoneNumber,
        'OfficeCode'=>$faker->postcode,
        'ReportsTo' =>$faker->randomNumber(9),
        'LastName' =>$faker->lastName,
        'FirstName' =>$faker->firstName,
        'Extension' =>$faker->fileExtension,
        'Email' =>$faker->email,
        'JopTitle' =>$faker->word,
    ];
});
