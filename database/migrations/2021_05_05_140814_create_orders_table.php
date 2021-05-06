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
            $table->bigInteger("user_id");
            $table->string("order_address");
            $table->string("order_region");
            $table->string("order_city");
            $table->enum("order_payment_method", ["cash_on_delivery", "orange_money"])->default("cash_on_delivery");
            $table->enum("order_payment_status", ["pending", "processing", "completed", "decline"])->default("pending");
            $table->boolean("is_paid")->default(false);
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
