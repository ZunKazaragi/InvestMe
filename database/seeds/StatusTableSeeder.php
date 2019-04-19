<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
          [
              "name" => "Un-verified"
          ],
          [
              "name" => "Verified"
          ],
          [
              "name" => "Banned"
          ]
        ]);
    }
}