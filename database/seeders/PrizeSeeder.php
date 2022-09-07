<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Prize::factory(5)->create();
    }
}
