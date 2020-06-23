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
            $table->integer('cost');
            $table->date('deliver_date');
            $table->time('deliver_hour');
            $table->boolean('enable')->default(1);
            $table->integer('order_type');
            $table->bigInteger('deliveryuser_id')->nullable()->unsigned();
            $table->foreign('deliveryuser_id')->references('id')->on('users');
            $table->timestamps();
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
