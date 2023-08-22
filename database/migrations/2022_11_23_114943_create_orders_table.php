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

            $table->string(column:'first_name');
            $table->string(column:'last_name');
            $table->string(column:'company_name')->nullable();
            $table->string(column:'country');
            $table->string(column:'street_address');
            $table->string(column:'postcode_zip');
            $table->string(column:'town_city');
            $table->string(column:'email');
            $table->string(column:'phone');
            $table->string(column:'payment_type');

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
};
