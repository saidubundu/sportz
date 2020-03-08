<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('teams')->truncate();
        $teamLogo = "logo-" . rand(1,18) .    ".png";
        $squadPhoto = "squad-" . rand(1,10) . ".jpg";
        $faker = Factory::create();
        DB::table('teams')->insert([
            [
                'name' => 'Kamboi Eagles',
                'squadPhoto' => $squadPhoto,
                'teamLogo' => $teamLogo,
                'established_in'=> '1990',
                'manager' => 'John Doe',
                'ground' => 'Parade Ground',
                'coach' => 'Jame Paul',
                'history' => $faker->paragraph(rand(20,35),true)
            ],

            [
                'name' => 'Kallon',
                'squadPhoto' => $squadPhoto,
                'teamLogo' => $teamLogo,
                'established_in'=> '1990',
                'manager' => 'John Doe',
                'ground' => 'Parade Ground',
                'coach' => 'Jame Paul',
                'history' => $faker->paragraph(rand(20,35),true)
            ],

            [
                'name' => 'Bo Rangers',
                'squadPhoto' => $squadPhoto,
                'teamLogo' => $teamLogo,
                'established_in'=> '1990',
                'manager' => 'John Doe',
                'ground' => 'Parade Ground',
                'coach' => 'Jame Paul',
                'history' => $faker->paragraph(rand(20,35),true)
            ],

            [
                'name' => 'East End Lions',
                'squadPhoto' => $squadPhoto,
                'teamLogo' => $teamLogo,
                'established_in'=> '1990',
                'manager' => 'John Doe',
                'ground' => 'Parade Ground',
                'coach' => 'Jame Paul',
                'history' => $faker->paragraph(rand(20,35),true)
            ],

            [
                'name' => 'Ports Authority',
                'squadPhoto' => $squadPhoto,
                'teamLogo' => $teamLogo,
                'established_in'=> '1990',
                'manager' => 'John Doe',
                'ground' => 'Parade Ground',
                'coach' => 'Jame Paul',
                'history' => $faker->paragraph(rand(20,35),true)
            ],

            [
                'name' => 'Diamond Stars',
                'squadPhoto' => $squadPhoto,
                'teamLogo' => $teamLogo,
                'established_in'=> '1990',
                'manager' => 'John Doe',
                'ground' => 'Parade Ground',
                'coach' => 'Jame Paul',
                'history' => $faker->paragraph(rand(20,35),true)
            ],

            [
                'name' => 'Johansen',
                'squadPhoto' => $squadPhoto,
                'teamLogo' => $teamLogo,
                'established_in'=> '1990',
                'manager' => 'John Doe',
                'ground' => 'Parade Ground',
                'coach' => 'Jame Paul',
                'history' => $faker->paragraph(rand(20,35),true)
            ],

            [
                'name' => 'Old Edwardians',
                'squadPhoto' => $squadPhoto,
                'teamLogo' => $teamLogo,
                'established_in'=> '1990',
                'manager' => 'John Doe',
                'ground' => 'Parade Ground',
                'coach' => 'Jame Paul',
                'history' => $faker->paragraph(rand(20,35),true)
            ],

            [
                'name' => 'Anti Drugs Strikers',
                'squadPhoto' => $squadPhoto,
                'teamLogo' => $teamLogo,
                'established_in'=> '1990',
                'manager' => 'John Doe',
                'ground' => 'Parade Ground',
                'coach' => 'Jame Paul',
                'history' => $faker->paragraph(rand(20,35),true)
            ],

            [
                'name' => 'RSLAF',
                'squadPhoto' => $squadPhoto,
                'teamLogo' => $teamLogo,
                'established_in'=> '1990',
                'manager' => 'John Doe',
                'ground' => 'Parade Ground',
                'coach' => 'Jame Paul',
                'history' => $faker->paragraph(rand(20,35),true)
            ],

            [
                'name' => 'Mighty Blackpool',
                'squadPhoto' => $squadPhoto,
                'teamLogo' => $teamLogo,
                'established_in'=> '1990',
                'manager' => 'John Doe',
                'ground' => 'Parade Ground',
                'coach' => 'Jame Paul',
                'history' => $faker->paragraph(rand(20,35),true)
            ],

            [
                'name' => 'Freetown City',
                'squadPhoto' => $squadPhoto,
                'teamLogo' => $teamLogo,
                'established_in'=> '1990',
                'manager' => 'John Doe',
                'ground' => 'Parade Ground',
                'coach' => 'Jame Paul',
                'history' => $faker->paragraph(rand(20,35),true)
            ],
        ]);
    }
}
