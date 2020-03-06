<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();

//        $faker = Factory::create();
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'doe@peektower.com',
                'password'=> bcrypt('password'),
            ],

            [
                'name' => 'Jane Doe',
                'email' => 'jane@peektower.com',
                'password'=> bcrypt('password'),
            ],

            [
                'name' => 'Saidu Bundu',
                'email' => 'saidu@peektower.com',
                'password'=> bcrypt('password'),
            ],
        ]);
    }
}
