<?php

use Illuminate\Database\Seeder;
use App\Friendshop;

class FriendshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $friendshop = new Friendshop;
        $friendshop->name = "Sin local amigo";
        $friendshop->address = "00";
        $friendshop->email = "00@gmail.com";
        $friendshop->save();

    }
}
