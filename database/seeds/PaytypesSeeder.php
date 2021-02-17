<?php

use Illuminate\Database\Seeder;
use App\Paytypes;

class PaytypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paytype = new Paytypes;
        $paytype->name = "Efectivo";
        $paytype->save();

        $paytype = new Paytypes;
        $paytype->name = "Debito";
        $paytype->save();

        $paytype = new Paytypes;
        $paytype->name = "Credito";
        $paytype->save();

        $paytype = new Paytypes;
        $paytype->name = "Gratis";
        $paytype->save();

    }
}
