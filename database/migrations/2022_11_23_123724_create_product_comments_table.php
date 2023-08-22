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
        Schema::create('product_comments', function (Blueprint $table) {
            $table->id();

            $table->integer(column:'product_id')->unsigned();
            $table->integer(column:'user_id')->unsigned()->nullable();
            $table->string(column:'email');
            $table->string(column:'name');
            $table->string(column:'meesages');
            $table->integer(column:'rating')->unsigned();

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
        Schema::dropIfExists('product_comments');
    }
};
