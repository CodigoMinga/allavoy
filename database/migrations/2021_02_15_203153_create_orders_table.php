<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('client');
            $table->string('address');
            $table->integer('cost')->nullable();

            $table->bigInteger('paytype_id')->nullable()->unsigned();
            $table->foreign('paytype_id')->references('id')->on('paytypes');

            $table->date('deliver_date');
            $table->time('deliver_hour');
            $table->integer('enable')->default(1);

            $table->bigInteger('ordertype_id')->nullable()->unsigned();
            $table->foreign('ordertype_id')->references('id')->on('ordertypes');

            $table->bigInteger('deliveryuser_id')->nullable()->unsigned();
            $table->foreign('deliveryuser_id')->references('id')->on('users');
            $table->timestamps();

            $table->bigInteger('friendshop_id')->nullable()->unsigned();
            $table->foreign('friendshop_id')->references('id')->on('friendshops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
