<?php

use App\User;
use App\Admin;
use App\Books;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => 'avinash', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(Admin::class,function(Faker $faker){
    return[
        'name'=>$faker->name,
        'email'=>$faker->unique()->safeEmail,
        'password' => 'avinash', // password
        'remember_token' => Str::random(10),

    ];
});

$factory->define(Books::class, function(Faker $faker){
    return [
        'Book_name'=>$faker->name,
        'Book_author'=>$faker->name,
    ];
});


