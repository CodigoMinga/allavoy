<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrador  = Role::where('name', 'administrador')->first();
        $repartidor      = Role::where('name', 'repartidor')->first();



            $user = new User();
            $user->name = 'Nikotine';
            $user->email = 'Nikotine991@gmail.com';
            $user->password = bcrypt('password');
            $user->save();
             $user->roles()->attach($administrador);

            $user = new User();
            $user->name = 'luchito';
            $user->email = 'luchito@gmail.com';
            $user->password = bcrypt('password');
            $user->save();
             $user->roles()->attach($repartidor);

            $user = new User();
            $user->name = 'chelo';
            $user->email = 'chelo@gmail.com';
            $user->password = bcrypt('password');
            $user->save();
            $user->roles()->attach($repartidor);

            $user = new User();
            $user->name = 'chami';
            $user->email = 'chami@gmail.com';
            $user->password = bcrypt('password');
            $user->save();
            $user->roles()->attach($repartidor);

            $user = new User();
            $user->name = 'pancho';
            $user->email = 'pancho@gmail.com';
            $user->password = bcrypt('password');
            $user->save();
             $user->roles()->attach($repartidor);

            $user = new User();
            $user->name = 'yari';
            $user->email = 'yari@gmail.com';
            $user->password = bcrypt('password');
            $user->save();
            $user->roles()->attach($repartidor);
    }
}
