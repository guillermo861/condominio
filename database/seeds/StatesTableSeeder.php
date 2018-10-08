<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert(['state' => 'California']);
        DB::table('states')->insert(['state' => 'Carolina']);
        DB::table('states')->insert(['state' => 'Washington']);
        DB::table('states')->insert(['state' => 'Texas']);
    }
}
