<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dokter;
use Faker\Generator as Faker;

$factory->define(Dokter::class, function (Faker $faker) {
    return [
        'nama_dokter' => $faker->sentence(),
        'umur' => $faker->sentence(2),
        'jk' => $faker->randomNumber(3),
        'alamat' => $faker->sentence(),
        'no_telp' => $faker->randomNumber(3),
    ];
});
