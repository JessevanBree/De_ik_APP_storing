<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'question' => str_random(10),
            'boolanswer' => true,
            'comment' => true,
        ]);
    }
}
