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
        DB::table('scool_years')->insert(['scool_year' => '2018-2019']);
        DB::table('scool_years')->insert(['scool_year' => '2019-2020']);
        DB::table('scool_years')->insert(['scool_year' => '2020-2021']);
    }
}
