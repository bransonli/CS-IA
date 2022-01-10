<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $subjects = [
            ['name' => 'Physics'],
            ['name' => 'Math'],
            ['name' => 'Computer science'],
            ['name' => 'Langlit'],
            ['name' => 'Chinese'],
        ];        
        
        DB::table('subjects')->insert($subjects);
    }
}

/**https://stackoverflow.com/questions/28594076/seed-multiple-rows-at-once-laravel-5 */