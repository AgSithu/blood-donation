<?php

namespace Database\Seeders;

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
        $this->call([
            BloodGroupSeeder::class,
            WilayaSeeder::class,
            DairaSeeder::class,
            UserSeeder::class,
        ]);
    }
}
