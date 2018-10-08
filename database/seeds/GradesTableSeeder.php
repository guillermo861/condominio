<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert(['grade' => 'K-6th']);
        DB::table('grades')->insert(['grade' => 'individually']);
    }
}
