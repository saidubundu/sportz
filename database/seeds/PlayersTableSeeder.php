<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('players')->truncate();
        $profileImage = "player-" . rand(1,10) .    ".jpg";
        $pitchImage = "pitch-" . rand(1,10) . ".jpg";
        $faker = Factory::create();
        DB::table('players')->insert([
            [
                'team_id' => rand(1,12),
                'profileImage' => $profileImage,
                'pitchImage' => $pitchImage,
                'realName' => 'Mohamed Kamara',
                'nickName' => 'Musa Tombo',
                'position_id' => rand(1,4),
                'age' => rand(18,34),
                'height' => rand(34,44),
                'weight' => rand(45,55),
                'history' => $faker->paragraph(rand(10,18),true),
                'nationality' => 'Sierra Leonean',
                'pob' => 'Bo',
                'bio' => $faker->sentence(rand(11,12)),
            ],

            [
                'team_id' => rand(1,12),
                'profileImage' => $profileImage,
                'pitchImage' => $pitchImage,
                'realName' => 'Mohamed Kamara',
                'nickName' => 'Musa Tombo',
                'position_id' => rand(1,4),
                'age' => rand(18,34),
                'height' => rand(34,44),
                'weight' => rand(45,55),
                'history' => $faker->paragraph(rand(10,18),true),
                'nationality' => 'Sierra Leonean',
                'pob' => 'Bo',
                'bio' => $faker->sentence(rand(11,12)),
            ],

            [
                'team_id' => rand(1,12),
                'profileImage' => $profileImage,
                'pitchImage' => $pitchImage,
                'realName' => 'Mohamed Kamara',
                'nickName' => 'Kallon',
                'position_id' => rand(1,4),
                'age' => rand(18,34),
                'height' => rand(34,44),
                'weight' => rand(45,55),
                'history' => $faker->paragraph(rand(10,18),true),
                'nationality' => 'Sierra Leonean',
                'pob' => 'Bo',
                'bio' => $faker->sentence(rand(11,12)),
            ],

            [
                'team_id' => rand(1,12),
                'profileImage' => $profileImage,
                'pitchImage' => $pitchImage,
                'realName' => 'Mohamed Kamara',
                'nickName' => 'Junior Tumbu',
                'position_id' => rand(1,4),
                'age' => rand(18,34),
                'height' => rand(34,44),
                'weight' => rand(45,55),
                'history' => $faker->paragraph(rand(10,18),true),
                'nationality' => 'Sierra Leonean',
                'pob' => 'Bo',
                'bio' => $faker->sentence(rand(11,12)),
            ],

            [
                'team_id' => rand(1,12),
                'profileImage' => $profileImage,
                'pitchImage' => $pitchImage,
                'realName' => 'Mohamed Kamara',
                'nickName' => 'Kie Kamara',
                'position_id' => rand(1,4),
                'age' => rand(18,34),
                'height' => rand(34,44),
                'weight' => rand(45,55),
                'history' => $faker->paragraph(rand(10,18),true),
                'nationality' => 'Sierra Leonean',
                'pob' => 'Bo',
                'bio' => $faker->sentence(rand(11,12)),
            ],
            [
                'team_id' => rand(1,12),
                'profileImage' => $profileImage,
                'pitchImage' => $pitchImage,
                'realName' => 'Victor bangura',
                'nickName' => 'Musa Tombo',
                'position_id' => rand(1,4),
                'age' => rand(18,34),
                'height' => rand(34,44),
                'weight' => rand(45,55),
                'history' => $faker->paragraph(rand(10,18),true),
                'nationality' => 'Sierra Leonean',
                'pob' => 'Bo',
                'bio' => $faker->sentence(rand(11,12)),
            ],
        ]);
    }
}
