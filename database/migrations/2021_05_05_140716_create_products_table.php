<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("category_id");
            $table->string("prod_designation")->unique();
            $table->text("prod_description");
            $table->float("prod_price");
            $table->string("prod_sku")->unique();
            $table->string("prod_color")->nullable();
            $table->string("prod_mass")->nullable();
            $table->string("prod_image")->nullable();
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
        Schema::dropIfExists('products');
    }
}
