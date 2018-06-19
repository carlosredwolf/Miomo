<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      DB::table('users')->insert([
        'name' => 'John',
        'email' => 'correo@ejemplo.com',
        'password' => bcrypt('123456789'),
        'confirmed' => 1,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
      ]);

      DB::table('datos__usuarios')->insert([
        'nombre' => 'John',
        'apellidos' => 'Doe',
        'fecha_nacimiento' => $faker->dateTime,
        'celular' => $faker->tollFreePhoneNumber,
        'id_pais' => rand(1,214),
        'id_ciudad' => rand(1,1000),
        'correo' => 'correo@ejemplo.com',
        'id_usuario' => 1,
        'id_rol' => 1,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
      ]);

    }
}
