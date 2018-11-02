<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
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
                'post_id' => 1,
            ],
            1 => [
                'title' => str_random(200),
                'content' => str_random(1000),
                'post_id' => 2,
            ],
            2 => [
                'title' => str_random(200),
                'content' => str_random(1000),
                'post_id' => 1,
            ],
            3 => [
                'title' => str_random(200),
                'content' => str_random(1000),
                'post_id' => 3,
            ],
            4 => [
                'title' => str_random(200),
                'content' => str_random(1000),
                'post_id' => 4,
            ],
        ];
        DB::table('comments')->insert($data);
    }
}
