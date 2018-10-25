<?php

use Faker\Generator as Faker;

$factory->define(App\SensorAgua::class, function (Faker $faker) {
    $estados = ['D', 'L'];
    $today = today();
    $today->subDays(rand(0, 29));

    return [
        'estado' => $estados[array_rand($estados, 1)],
        'dia_hora' => $today,
        'acesso_id' => null
    ];
});

$factory->define(App\SensorLuz::class, function (Faker $faker) {
    $estados = ['D', 'L'];
    $today = today();
    $today->subDays(rand(0, 29));

    return [
        'estado' => $estados[array_rand($estados, 1)],
        'dia_hora' => $today,
        'acesso_id' => null
    ];
});
