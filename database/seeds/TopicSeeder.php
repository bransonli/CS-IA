<?php

use Illuminate\Database\Seeder;

class DiscussionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discussions')->insert([
            'name' => "electricity",
            'subject' => "physics"

        ]);
    }
}
