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
        Schema::create('phanquyen', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ql_user')->nullable();
            $table->string('ql_product')->nullable();
            $table->string('ql_category')->nullable();
            $table->string('ql_order')->nullable();
            $table->unsignedBigInteger('admin_id')->unsigned();
           
            $table->foreign('admin_id')->references("id")->on("admin");
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
        Schema::dropIfExists('phanquyen');
    }
};
