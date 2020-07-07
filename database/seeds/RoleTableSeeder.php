<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $role = new Role();
        $role->name = 'administrador';
        $role->description = 'Super administrador del sistema';
        $role->save();

        $role = new Role();
        $role->name = 'repartidor';
        $role->description = 'Repartidor';
        $role->save();

  }
}