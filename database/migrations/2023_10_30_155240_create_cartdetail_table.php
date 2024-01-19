<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartdetail', function (Blueprint $table) {
        
            $table->timestamps();
            $table->string('quanlity')->nullable();

        $table->unsignedBigInteger('productdetail_id')->unsigned();
        $table->unsignedBigInteger('cart_id')->unsigned();

        $table->primary(['productdetail_id', 'cart_id']);
        $table->foreign('productdetail_id')->references("id")->on("productdetail");
        $table->foreign('cart_id')->references("id")->on("carts");
        $table->integer('isDeleted')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartdetail');
    }
};
