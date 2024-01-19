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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('detail')->nullable();
            $table->string('sum')->nullable();
            $table->string('dateorder')->nullable();

            $table->unsignedBigInteger('receiver_id')->unsigned();
            $table->unsignedBigInteger('client_id')->unsigned();
            $table->unsignedBigInteger('shipping_id')->unsigned();
            $table->integer('isDeleted')->default(1);   
            
            $table->foreign('receiver_id')->references("id")->on("receiver");
            $table->foreign('client_id')->references("id")->on("client");
            $table->foreign('shipping_id')->references("id")->on("shipping");
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
};
