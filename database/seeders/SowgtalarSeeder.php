<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SowgtalarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\sowgtalar::factory(5)->create();
    }
}
