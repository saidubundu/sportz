<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            [
                'name' => 'Soccer'
            ],

            [
                'name' => 'BasketBall'
            ],

            [
                'name' => 'VolleyBall'
            ],

            [
                'name' => 'Cricket'
            ],
        ]);

        for ($post_id = 1; $post_id <= 10; $post_id++)
        {
            $category_id = rand(1, 5);

            DB::table('posts')
                ->where('id', $post_id)
                ->update(['category_id' => $category_id]);
        }
    }
}
