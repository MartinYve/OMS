<?php

use Illuminate\Database\Seeder;
use App\Role;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'order_manager']);
        $role = Role::create(['name' => 'customer']);
        $role = Role::create(['name' => 'Delivery_person']);
        $role = Role::create(['name' => 'manager']);
    }
}
