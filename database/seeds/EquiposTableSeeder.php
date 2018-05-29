<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('equipos')->insert(['id_pais' => 1,
                                      'nombre' => 'N/D',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 2,
                                      'nombre' => 'Russia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 3,
                                      'nombre' => 'Egypt',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 4,
                                      'nombre' => 'Saudi Arabia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 5,
                                      'nombre' => 'Germany',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 6,
                                      'nombre' => 'Costa Rica',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 7,
                                      'nombre' => 'Argentina',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 8,
                                      'nombre' => 'Morocco',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 9,
                                      'nombre' => 'Australia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 10,
                                      'nombre' => 'Belgium',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 11,
                                      'nombre' => 'Mexico',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 12,
                                      'nombre' => 'Brazil',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 13,
                                      'nombre' => 'Nigeria',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 14,
                                      'nombre' => 'Japan',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 15,
                                      'nombre' => 'Croatia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 16,
                                      'nombre' => 'Panama',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 17,
                                      'nombre' => 'Colombia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 18,
                                      'nombre' => 'Senegal',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 19,
                                      'nombre' => 'Korea Republic',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 20,
                                      'nombre' => 'Denmark',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 21,
                                      'nombre' => 'Peru',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 22,
                                      'nombre' => 'Tunisia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 23,
                                      'nombre' => 'IR Iran',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 24,
                                      'nombre' => 'Spain',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 25,
                                      'nombre' => 'France',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 26,
                                      'nombre' => 'England',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 27,
                                      'nombre' => 'Iceland',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 28,
                                      'nombre' => 'Poland',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 29,
                                      'nombre' => 'Portugal',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 30,
                                      'nombre' => 'Serbia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 31,
                                      'nombre' => 'Sweden',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 32,
                                      'nombre' => 'Switzerland',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 33,
                                      'nombre' => 'United States',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 34,
                                      'nombre' => 'Italy',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('equipos')->insert(['id_pais' => 35,
                                      'nombre' => 'Uruguay',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
    }
}
