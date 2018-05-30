<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PartidosQRFTableSeeder extends Seeder
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
                                      'fecha_partido' => Carbon::parse('2018-07-06'),
                                      'id_jornada' => 5,
                                      'id_grupo' => 9,
                                      'id_local' => 52,
                                      'id_visitante' => 53,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('partidos')->insert(['score_local' => null,
                                      'score_visitante' => null,
                                      'hora_partido' => '13:00:00',
                                      'fecha_partido' => Carbon::parse('2018-07-06'),
                                      'id_jornada' => 5,
                                      'id_grupo' => 9,
                                      'id_local' => 56,
                                      'id_visitante' => 57,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('partidos')->insert(['score_local' => null,
                                      'score_visitante' => null,
                                      'hora_partido' => '09:00:00',
                                      'fecha_partido' => Carbon::parse('2018-07-07'),
                                      'id_jornada' => 5,
                                      'id_grupo' => 9,
                                      'id_local' => 58,
                                      'id_visitante' => 59,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('partidos')->insert(['score_local' => null,
                                      'score_visitante' => null,
                                      'hora_partido' => '13:00:00',
                                      'fecha_partido' => Carbon::parse('2018-07-07'),
                                      'id_jornada' => 5,
                                      'id_grupo' => 9,
                                      'id_local' => 54,
                                      'id_visitante' => 55,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
    }
}
