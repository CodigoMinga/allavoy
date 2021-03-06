<?php

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
        $this->call(RoleTableSeeder::class);
        $this->call(Userseeder::class);
        $this->call(FriendshopSeeder::class);
        $this->call(OrdertypeSeeder::class);
        $this->call(PaytypesSeeder::class);
    }
}
