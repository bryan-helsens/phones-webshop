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
            $table->string('order_id');
            $table->string("firstname");
            $table->string("lastname");
            $table->string("phone");
            $table->string("email");
            $table->string("address");
            $table->string("city");
            $table->string("country");
            $table->integer("zipcode");
            $table->string("payment_method");
            $table->double("subtotal");
            $table->double("shipping_price");
            $table->double("tax_price");
            $table->double("total_price");
            $table->unsignedBigInteger("user_id");

            $table->boolean("is_paid");
            $table->date("paid_at")->nullable();

            $table->boolean("is_delivered");
            $table->date("delivered_at")->nullable();
            $table->timestamps();


            $table->index('user_id');

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
