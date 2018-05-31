<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PartidosR16TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('partidos')->insert(['score_local' => null,
                                      'score_visitante' => null,
                                      'hora_partido' => '09:00:00',
                                      'fecha_partido' => Carbon::parse('2018-06-30'),
                                      'id_jornada' => 4,
                                      'id_grupo' => 9,
                                      'id_local' => 40,
                                      'id_visitante' => 43,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('partidos')->insert(['score_local' => null,
                                      'score_visitante' => null,
                                      'hora_partido' => '13:00:00',
                                      'fecha_partido' => Carbon::parse('2018-06-30'),
                                      'id_jornada' => 4,
                                      'id_grupo' => 9,
                                      'id_local' => 36,
                                      'id_visitante' => 39,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('partidos')->insert(['score_local' => null,
                                      'score_visitante' => null,
                                      'hora_partido' => '09:00:00',
                                      'fecha_partido' => Carbon::parse('2018-07-01'),
                                      'id_jornada' => 4,
                                      'id_grupo' => 9,
                                      'id_local' => 38,
                                      'id_visitante' => 37,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('partidos')->insert(['score_local' => null,
                                      'score_visitante' => null,
                                      'hora_partido' => '13:00:00',
                                      'fecha_partido' => Carbon::parse('2018-07-01'),
                                      'id_jornada' => 4,
                                      'id_grupo' => 9,
                                      'id_local' => 42,
                                      'id_visitante' => 41,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('partidos')->insert(['score_local' => null,
                                      'score_visitante' => null,
                                      'hora_partido' => '09:00:00',
                                      'fecha_partido' => Carbon::parse('2018-07-02'),
                                      'id_jornada' => 4,
                                      'id_grupo' => 9,
                                      'id_local' => 44,
                                      'id_visitante' => 47,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('partidos')->insert(['score_local' => null,
                                      'score_visitante' => null,
                                      'hora_partido' => '13:00:00',
                                      'fecha_partido' => Carbon::parse('2018-07-02'),
                                      'id_jornada' => 4,
                                      'id_grupo' => 9,
                                      'id_local' => 48,
                                      'id_visitante' => 51,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('partidos')->insert(['score_local' => null,
                                      'score_visitante' => null,
                                      'hora_partido' => '09:00:00',
                                      'fecha_partido' => Carbon::parse('2018-07-03'),
                                      'id_jornada' => 4,
                                      'id_grupo' => 9,
                                      'id_local' => 46,
                                      'id_visitante' => 45,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('partidos')->insert(['score_local' => null,
                                      'score_visitante' => null,
                                      'hora_partido' => '13:00:00',
                                      'fecha_partido' => Carbon::parse('2018-07-03'),
                                      'id_jornada' => 4,
                                      'id_grupo' => 9,
                                      'id_local' => 50,
                                      'id_visitante' => 49,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
    }
}
