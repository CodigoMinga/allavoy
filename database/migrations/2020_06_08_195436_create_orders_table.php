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
            $table->string('pay_type')->nullable();
            $table->date('deliver_date');
            $table->time('deliver_hour');
            $table->integer('enable')->default(1);
            $table->integer('order_type');
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
