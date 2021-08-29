<?php

namespace Database\Seeders;

use Database\Seeders\MunicipalitySeeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\UserSeeder;
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
        $this->call(PermissionSeeder::class);
        $this->call(MunicipalitySeeder::class);
        $this->call(UserSeeder::class);
    }
}
