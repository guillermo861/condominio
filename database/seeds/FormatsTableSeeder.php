<?php

use Illuminate\Database\Seeder;

class FormatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formats')->insert(['format' => 'K-2']);
        DB::table('formats')->insert(['format' => '3-6']);
    }
}
