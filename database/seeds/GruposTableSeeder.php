<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('grupos')->insert(['nombre' => 'A',
                                      'descripcion' => 'Grupo A',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'B',
                                      'descripcion' => 'Grupo B',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'C',
                                      'descripcion' => 'Grupo C',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'D',
                                      'descripcion' => 'Grupo D',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'E',
                                      'descripcion' => 'Grupo E',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'F',
                                      'descripcion' => 'Grupo F',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'G',
                                      'descripcion' => 'Grupo G',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'H',
                                      'descripcion' => 'Grupo H',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'N/A',
                                      'descripcion' => 'No Aplica',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);

    }
}
