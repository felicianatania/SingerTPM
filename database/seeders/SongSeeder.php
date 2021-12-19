<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'title'=>'Falling',
            'singer'=>'Harry',
            'album'=>'HEE',
            'country'=>'USA',
            'release'=>'2021-01-10',
            'price'=>100000,
        ]);
    }
}
