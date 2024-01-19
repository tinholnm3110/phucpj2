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
        Schema::create('orderdetail', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('productdetail_id')->unsigned();
            $table->unsignedBigInteger('order_id')->unsigned();
            $table->string('cost')->nullable();
            $table->string('quanlity')->nullable();
   
            $table->primary(['productdetail_id', 'order_id']);
   
            $table->foreign('productdetail_id')->references("id")->on("productdetail");
            $table->foreign('order_id')->references("id")->on("orders");    
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetail');
    }
};
