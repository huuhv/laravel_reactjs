<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            0 => [
                'title' => str_random(200),
                'content' => str_random(1000),
            ],
            1 => [
                'title' => str_random(200),
                'content' => str_random(1000),
            ],
            2 => [
                'title' => str_random(200),
                'content' => str_random(1000),
            ],
            3 => [
                'title' => str_random(200),
                'content' => str_random(1000),
            ],
        ];
        DB::table('posts')->insert($data);
    }
}
