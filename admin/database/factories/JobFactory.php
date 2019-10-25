<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->jobTitle(), 
        'company' => $faker->company(), 
        'description' =>$faker->text(200)
    ];
});
