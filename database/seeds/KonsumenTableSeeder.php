<?php

use Illuminate\Database\Seeder;

class KonsumenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('konsumen')->insert([
        	'nama_konsumen' => 'Elsa',
        	'jenis_kendaraan' =>'Mobil',
        	'no_polisi' => 'B 12345 C',
        	'tgl_lahir' => '1996-04-28',
        	'kelamin' => 'P',
        	'no_hp' => '081315209028',
        	'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
