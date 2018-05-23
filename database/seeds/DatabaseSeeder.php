<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
        // CatResulTableSeeder::class,
        // CatStatusTableSeeder::class,
        // PaisesTableSeeder::class,
        // EquiposTableSeeder::class,
        // EventosTableSeeder::class,
        // JornadasTableSeeder::class,
        // GruposTableSeeder::class,
        //
        // PartidosJ1TableSeeder::class,
        // PartidosJ2TableSeeder::class,
        // PartidosJ3TableSeeder::class,
        // PartidosR16TableSeeder::class,
        // PartidosQRFTableSeeder::class,
        // PartidosSMFTableSeeder::class,
        // PartidosFNLTableSeeder::class,
        CatUserTableSeeder::class,


    ]);
    }
}
