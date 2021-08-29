<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'admin']);
        Permission::create(['name' => 'candidate']);
        Permission::create(['name' => 'cadre']);
        Permission::create(['name' => 'chef_bureau']);
        Permission::create(['name' => 'other']);
        Permission::create(['name' => 'boujdour']);
        Permission::create(['name' => 'jrayfia']);
        Permission::create(['name' => 'zemmour']);
        Permission::create(['name' => 'c1']);
        Permission::create(['name' => 'c2']);
        Permission::create(['name' => 'c3']);
        Permission::create(['name' => 'c4']);
        Permission::create(['name' => 'c5']);
        Permission::create(['name' => 'c6']);
        Permission::create(['name' => 'c7']);
        Permission::create(['name' => 'c8']);
        Permission::create(['name' => 'c9']);
        Permission::create(['name' => 'c10']);
        Permission::create(['name' => 'c11']);
        Permission::create(['name' => 'c12']);
        Permission::create(['name' => 'c13']);
        Permission::create(['name' => 'c14']);
        Permission::create(['name' => 'c15']);
        Permission::create(['name' => 'c16']);
        Permission::create(['name' => 'c17']);
        Permission::create(['name' => 'c18']);
        Permission::create(['name' => 'c19']);
        Permission::create(['name' => 'c20']);
        Permission::create(['name' => 'c21']);
        Permission::create(['name' => 'c22']);
        Permission::create(['name' => 'c23']);
        Permission::create(['name' => 'c24']);
        Permission::create(['name' => 'c25']);

    }
}
