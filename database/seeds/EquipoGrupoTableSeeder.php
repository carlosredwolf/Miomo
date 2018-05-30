<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EquipoGrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('equipo_grupos')->insert(['id_grupo' => 1,
                                      'id_equipo' => 2,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 1,
                                      'id_equipo' => 4,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 1,
                                      'id_equipo' => 3,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 1,
                                      'id_equipo' => 35,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 2,
                                      'id_equipo' => 24,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 2,
                                      'id_equipo' => 29,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 2,
                                      'id_equipo' => 8,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 2,
                                      'id_equipo' => 23,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 3,
                                      'id_equipo' => 9,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 3,
                                      'id_equipo' => 20,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 3,
                                      'id_equipo' => 25,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 3,
                                      'id_equipo' => 21,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 4,
                                      'id_equipo' => 7,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 4,
                                      'id_equipo' => 15,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 4,
                                      'id_equipo' => 27,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 4,
                                      'id_equipo' => 13,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 5,
                                      'id_equipo' => 12,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 5,
                                      'id_equipo' => 6,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 5,
                                      'id_equipo' => 30,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 5,
                                      'id_equipo' => 32,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 6,
                                      'id_equipo' => 5,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 6,
                                      'id_equipo' => 19,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 6,
                                      'id_equipo' => 31,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 6,
                                      'id_equipo' => 11,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 7,
                                      'id_equipo' => 10,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 7,
                                      'id_equipo' => 26,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 7,
                                      'id_equipo' => 22,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 7,
                                      'id_equipo' => 16,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 8,
                                      'id_equipo' => 17,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 8,
                                      'id_equipo' => 14,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 8,
                                      'id_equipo' => 28,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipo_grupos')->insert(['id_grupo' => 8,
                                      'id_equipo' => 18,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);

    }
}
