<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('positions')->truncate();
        DB::table('positions')->insert([
            [
                'name' => 'Forward'
            ],

            [
                'name' => 'Midfielder'
            ],

            [
                'name' => 'Defender'
            ],

            [
                'name' => 'Goalkeeper'
            ],
        ]);
    }
}
