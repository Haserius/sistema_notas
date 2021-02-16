<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Docentes;
use Faker\Generator as Faker;

$factory->define(Docentes::class, function (Faker $faker) {
    $gender = $faker->randomElements(['Male', 'Female'])[0];
    $ecivil = $faker->randomElements(['Soltero', 'Casado'])[0];
    return [
        'dni' => $faker->numberBetween(10561489, 75194622),
        'name' => $faker->name($gender),
        'direccion' => $faker->address,
        'apellidoPaterno' => $faker->lastName,
        'apellidoMaterno' => $faker->lastName,
        'email' => $faker->email,
        'estadoCivil' => $ecivil,
        'telefono' => $faker->e164PhoneNumber,
        'seguroSocial' => $faker->numberBetween(10561414890, 75194546229),
        'departamento_id' => '1',
        'password'=>'$2y$10$cuf37o9lN0IkRFv73Q7IB.c5bDqCvog845XuTKHxSbMep/D04mknG',
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => null,
        'deleted_at' => null
    ];
});