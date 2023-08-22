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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->integer(column:'brand_id')->unsigned();
            $table->integer(column:'product_category_id')->unsigned();
            $table->string(column:'name');
            $table->text(column:'description')->nullable();
            $table->text(column:'content')->nullable();
            $table->double(column:'price');
            $table->integer(column:'qty');
            $table->double(column:'discount')->nullable();
            $table->double(column:'weight')->nullable();
            $table->string(column:'sku')->nullable();
            $table->boolean(column:'featured');
            $table->string(column:'tag')->nullable();

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
};
