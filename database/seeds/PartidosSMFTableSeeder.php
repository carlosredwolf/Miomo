<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PartidosSMFTableSeeder extends Seeder
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
                                      'hora_partido' => '13:00:00',
                                      'fecha_partido' => Carbon::parse('2018-07-10'),
                                      'id_jornada' => 6,
                                      'id_grupo' => 9,
                                      'id_local' => 60,
                                      'id_visitante' => 61,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('partidos')->insert(['score_local' => null,
                                      'score_visitante' => null,
                                      'hora_partido' => '13:00:00',
                                      'fecha_partido' => Carbon::parse('2018-07-11'),
                                      'id_jornada' => 6,
                                      'id_grupo' => 9,
                                      'id_local' => 62,
                                      'id_visitante' => 63,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
    }
}
