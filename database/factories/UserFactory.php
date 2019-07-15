<?php

use Faker\Generator as Faker;

use App\CustomerState;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'telefono' => $faker->e164PhoneNumber,
        'sexo' => $faker->randomElement(['M','F']),
        'edad' => $faker->numberBetween($min=20, $max=50),
        'foto' => $faker->image('public/storage/users',400,300, 'people', false),
       // 'avatar' => '/users/'.\Faker\Provider\Image::image('/storage/app/public/users',200,200,'people'),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        
    ];
});
