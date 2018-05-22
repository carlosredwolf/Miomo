<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PaisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('paises')->insert(['codigo' => 'INTL',
                                      'pais' => 'Internacional',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'RUS',
                                      'pais' => 'Rusia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'EGY',
                                      'pais' => 'Egipto',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'KSA',
                                      'pais' => 'Arabia Saudí',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'GER',
                                      'pais' => 'Alemania',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'CRC',
                                      'pais' => 'Costa Rica',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'ARG',
                                      'pais' => 'Argentina',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'MAR',
                                      'pais' => 'Marruecos',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'AUS',
                                      'pais' => 'Australia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'BEL',
                                      'pais' => 'Bélgica',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'MEX',
                                      'pais' => 'México',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'BRA',
                                      'pais' => 'Brasil',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'NGA',
                                      'pais' => 'Nigeria',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'JPN',
                                      'pais' => 'Japón',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'CRO',
                                      'pais' => 'Croacia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'PAN',
                                      'pais' => 'Panamá',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'COL',
                                      'pais' => 'Colombia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'SEN',
                                      'pais' => 'Senegal',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'KOR',
                                      'pais' => 'Corea del Sur',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'DEN',
                                      'pais' => 'Dinamarca',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'PER',
                                      'pais' => 'Perú',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'TUN',
                                      'pais' => 'Tunéz',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'IRN',
                                      'pais' => 'Irán',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'ESP',
                                      'pais' => 'España',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'FRA',
                                      'pais' => 'Francia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'ENG',
                                      'pais' => 'Inglaterra',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'ISL',
                                      'pais' => 'Islandia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'POL',
                                      'pais' => 'Polonia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'POR',
                                      'pais' => 'Portugal',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'SRB',
                                      'pais' => 'Serbia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'SWE',
                                      'pais' => 'Suecia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'SUI',
                                      'pais' => 'Suiza',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'USA',
                                      'pais' => 'Estados Unidos',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'ITA',
                                      'pais' => 'Italia',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('paises')->insert(['codigo' => 'URU',
                                      'pais' => 'Uruguay',
                                      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);

    }
}
