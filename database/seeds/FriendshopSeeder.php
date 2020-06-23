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
        $friendshop->name = "Local 1";
        $friendshop->address = "asdasd";
        $friendshop->email = "asdasd@gmail.com";
        $friendshop->save();

        $friendshop = new Friendshop;
        $friendshop->name = "Local 2";
        $friendshop->address = "asdasd";
        $friendshop->email = "asdasd@gmail.com";
        $friendshop->save();
    }
}
