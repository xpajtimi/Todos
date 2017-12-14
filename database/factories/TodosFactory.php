<?php

use App\Todo;
use Faker\Generator as Faker;
//use Illuminate\Database\Eloquent\Faker\Generator;


$factory->define(Todo::class, function(Faker $faker){

	return[
		'todo' => $faker->sentence(10)
	];
});