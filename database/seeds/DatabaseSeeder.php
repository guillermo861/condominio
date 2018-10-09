<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FormatsTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(ScoolYearTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
    }
}
