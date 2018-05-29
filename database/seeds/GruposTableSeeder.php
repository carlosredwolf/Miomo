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
                                      'descripcion' => 'Group A',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'B',
                                      'descripcion' => 'Group B',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'C',
                                      'descripcion' => 'Group C',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'D',
                                      'descripcion' => 'Group D',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'E',
                                      'descripcion' => 'Group E',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'F',
                                      'descripcion' => 'Group F',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'G',
                                      'descripcion' => 'Group G',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'H',
                                      'descripcion' => 'Group H',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('grupos')->insert(['nombre' => 'N/D',
                                      'descripcion' => 'N/D',
                                      'id_evento' => 1,
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);

    }
}
