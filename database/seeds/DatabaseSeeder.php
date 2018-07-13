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
        //CatPaisesTableSeeder::class,
        //CatEstadosTableSeeder::class,
        CatResulTableSeeder::class,
        CatStatusTableSeeder::class,
        CatUserTableSeeder::class,
        PaisesTableSeeder::class,
        EquiposTableSeeder::class,
        EventosTableSeeder::class,
        JornadasTableSeeder::class,
        GruposTableSeeder::class,

        PartidosJ1TableSeeder::class,
        PartidosJ2TableSeeder::class,
        PartidosJ3TableSeeder::class,
        PartidosR16TableSeeder::class,
        PartidosQRFTableSeeder::class,
        PartidosSMFTableSeeder::class,
        PartidosFNLTableSeeder::class,

        EquipoGrupoTableSeeder::class,
        UsersTableSeeder::class,

    ]);
    }
}
