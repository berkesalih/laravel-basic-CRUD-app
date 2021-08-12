<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer("product_unicode");
            $table->string("product_slug");
            $table->string("product_title");
            $table->string("product_description");
            $table->integer("product_order");
            $table->integer("product_status");
            $table->double("product_prc");
            $table->integer("product_cid");

            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("user");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
