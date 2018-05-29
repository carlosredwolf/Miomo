<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('eventos')->insert(['nombre' => 'World Cup FIFA 2018',
                                      'fecha_inicio' => Carbon::parse('2018-06-14'),
                                      'fecha_fin' => Carbon::parse('2018-07-15'),
                                      'comentarios' => 'Copa Mundial de Fútbol',
                                      'id_anfitrion' => 2,
                                      'id_ganador' => 1,
                                      'id_finalista' => 1,
                                      'id_status' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
    }
}
