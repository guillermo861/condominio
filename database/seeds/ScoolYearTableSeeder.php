<?php

use Illuminate\Database\Seeder;

class ScoolYearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucool_years')->insert(['scool_year' => '2018-2019']);
        DB::table('sucool_years')->insert(['scool_year' => '2019-2020']);
        DB::table('sucool_years')->insert(['scool_year' => '2020-2021']);
    }
}
