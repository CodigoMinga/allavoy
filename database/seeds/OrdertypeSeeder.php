<?php

use Illuminate\Database\Seeder;
use App\Ordertype;

class OrdertypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ordertype = new Ordertype;
        $ordertype->name = "Compra";
        $ordertype->save();

        $ordertype = new Ordertype;
        $ordertype->name = "Encargo";
        $ordertype->save();
    }
}
