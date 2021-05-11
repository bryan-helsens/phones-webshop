<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("orders_id");
            $table->unsignedBigInteger("products_id");
            $table->string("color");
            $table->double("size");
            $table->integer("qty");
            $table->double("price");
            $table->double("total_price");
            $table->timestamps();

            $table->index("products_id");
            $table->index("orders_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_products');
    }
}
