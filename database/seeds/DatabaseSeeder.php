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
        $this->call(StatusTableSeeder::class);
        $this->call(LevelTableSeeder::class);
        $this->call(SectorTableSeeder::class);


        $this->call(UsersTableSeeder::class);
        $this->call(EntrepreneurTableSeeder::class);
        $this->call(InvestorTableSeeder::class);
    }
}
