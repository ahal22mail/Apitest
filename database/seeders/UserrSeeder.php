<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Userr::factory(5)->create();
    }
}
