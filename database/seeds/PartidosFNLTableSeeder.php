<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PartidosFNLTableSeeder extends Seeder
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
                                      'fecha_partido' => Carbon::parse('2018-07-14'),
                                      'id_jornada' => 7,
                                      'id_grupo' => 9,
                                      'id_local' => 64,
                                      'id_visitante' => 65,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('partidos')->insert(['score_local' => null,
                                      'score_visitante' => null,
                                      'hora_partido' => '10:00:00',
                                      'fecha_partido' => Carbon::parse('2018-07-15'),
                                      'id_jornada' => 7,
                                      'id_grupo' => 9,
                                      'id_local' => 66,
                                      'id_visitante' => 67,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
    }
}
