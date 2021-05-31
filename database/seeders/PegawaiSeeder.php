<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 20; $i++) { 
            DB::table('pegawais')->insert([
                'nip' => $faker->numberBetween(10000,99999),
                'nama' => $faker->name,
                'jabatan' => $faker->jobTitle,
                'gaji'=> rand(3,7)*1000000,
            ]);
        }
    }
}
