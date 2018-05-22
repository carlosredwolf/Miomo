<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class JornadasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jornadas')->insert(['nombre' => '1',
                                      'descripcion' => 'Fase de Grupos Jornada 1',
                                      'sig_jornada' => '2',
                                      'fecha_inicio' => Carbon::parse('2018-06-14'),
                                      'fecha_fin' => Carbon::parse('2018-06-19'),
                                      'id_status' => 1,
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('jornadas')->insert(['nombre' => '2',
                                      'descripcion' => 'Fase de Grupos Jornada 2',
                                      'sig_jornada' => '3',
                                      'fecha_inicio' => Carbon::parse('2018-06-19'),
                                      'fecha_fin' => Carbon::parse('2018-06-24'),
                                      'id_status' => 1,
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('jornadas')->insert(['nombre' => '3',
                                      'descripcion' => 'Fase de Grupos Jornada 3',
                                      'sig_jornada' => 'R16',
                                      'fecha_inicio' => Carbon::parse('2018-06-25'),
                                      'fecha_fin' => Carbon::parse('2018-06-28'),
                                      'id_status' => 1,
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('jornadas')->insert(['nombre' => 'R16',
                                      'descripcion' => 'Ronda de Octavos',
                                      'sig_jornada' => 'QRF',
                                      'fecha_inicio' => Carbon::parse('2018-06-30'),
                                      'fecha_fin' => Carbon::parse('2018-07-03'),
                                      'id_status' => 1,
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('jornadas')->insert(['nombre' => 'QRF',
                                      'descripcion' => 'Cuartos de Final',
                                      'sig_jornada' => 'SMF',
                                      'fecha_inicio' => Carbon::parse('2018-07-06'),
                                      'fecha_fin' => Carbon::parse('2018-07-07'),
                                      'id_status' => 1,
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('jornadas')->insert(['nombre' => 'SMF',
                                      'descripcion' => 'Semifinales',
                                      'sig_jornada' => 'FNL',
                                      'fecha_inicio' => Carbon::parse('2018-07-10'),
                                      'fecha_fin' => Carbon::parse('2018-07-11'),
                                      'id_status' => 1,
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
       DB::table('jornadas')->insert(['nombre' => 'FNL',
                                    'descripcion' => 'Final',
                                    'sig_jornada' => 'FNL',
                                    'fecha_inicio' => Carbon::parse('2018-07-14'),
                                    'fecha_fin' => Carbon::parse('2018-07-15'),
                                    'id_status' => 1,
                                    'id_evento' => 1,
                                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
    }
}
