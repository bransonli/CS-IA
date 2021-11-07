<?php

use Illuminate\Database\Seeder;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('replies')->insert([
            'content' => Str::random(10),
            'topic_id' => 1,

        ]);
    }
}
