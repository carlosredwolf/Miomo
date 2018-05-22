<?php

use Illuminate\Database\Seeder;

class PartidosJ1TableSeeder extends Seeder
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
                                      'hora_partido' => '10:00:00',
                                      'fecha_partido' => Carbon::parse('2018-06-14'),
                                      'id_jornada' => 1,
                                      'id_grupo' => 1,
                                      'id_local' => 2,
                                      'id_visitante' => 4,
                                      'id_resultado' => 4,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        
    }
}
