<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FixturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fixtures')->truncate();
        DB::table('fixtures')->insert([
            [
              'home_team_id' => rand(1,12),
                'away_team_id' => rand(1,12),
                'date' => '2020-03-07',
                'pitch' => 'National Stadium'
            ],

            [
                'home_team_id' => rand(1,12),
                'away_team_id' => rand(1,12),
                'date' => '2020-03-07',
                'pitch' => 'National Stadium'
            ],

            [
                'home_team_id' => rand(1,12),
                'away_team_id' => rand(1,12),
                'date' => '2020-03-07',
                'pitch' => 'National Stadium'
            ],

            [
                'home_team_id' => rand(1,12),
                'away_team_id' => rand(1,12),
                'date' => '2020-03-07',
                'pitch' => 'National Stadium'
            ],

            [
                'home_team_id' => rand(1,12),
                'away_team_id' => rand(1,12),
                'date' => '2020-03-07',
                'pitch' => 'National Stadium'
            ],

            [
                'home_team_id' => rand(1,12),
                'away_team_id' => rand(1,12),
                'date' => '2020-03-07',
                'pitch' => 'National Stadium'
            ],

            [
                'home_team_id' => rand(1,12),
                'away_team_id' => rand(1,12),
                'date' => '2020-03-07',
                'pitch' => 'National Stadium'
            ],

            [
                'home_team_id' => rand(1,12),
                'away_team_id' => rand(1,12),
                'date' => '2020-03-07',
                'pitch' => 'National Stadium'
            ],

            [
                'home_team_id' => rand(1,12),
                'away_team_id' => rand(1,12),
                'date' => '2020-03-07',
                'pitch' => 'National Stadium'
            ],

            [
                'home_team_id' => rand(1,12),
                'away_team_id' => rand(1,12),
                'date' => '2020-03-07',
                'pitch' => 'National Stadium'
            ],

            [
                'home_team_id' => rand(1,12),
                'away_team_id' => rand(1,12),
                'date' => '2020-03-07',
                'pitch' => 'National Stadium'
            ],
        ]);
    }
}
