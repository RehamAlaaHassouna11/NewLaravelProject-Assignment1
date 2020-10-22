<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'ID'=>$faker->password,
        'salesRepEmployeeNum'=>$faker->numberBetween(10,200),
        'Name' =>$faker->name,
        'LastName' =>$faker->lastName,
        'FirstName' =>$faker->firstName,
        'Phone' =>$faker->phoneNumber,
        'Address1' =>$faker->address,
        'Address2' =>$faker->secondaryAddress,
        'City'=> $faker->city,
        'State'=> $faker->state,
        'PostalCode'=> $faker->postcode,
        'Country'=> $faker->country,
        'CreditLimit'=> $faker->creditCardNumber
    ];
});
