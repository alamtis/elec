<?php

namespace Database\Seeders;

use App\Municipality;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipality::create(['name' => 'بوجدور']);
        Municipality::create(['name' => 'الجريفية']);
        Municipality::create(['name' => 'كلتة زمور']);
    }
}
