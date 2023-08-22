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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string(column:'name');
            $table->string(column:'email')->unique();
            $table->timestamp(column:'email_verified_at')->nullable();
            $table->string(column:'password');
            $table->rememberToken();

            $table->string( column:'avatar')->nullable();
            $table->tinyInteger( column:'level');
            $table->text( column:'description')->nullable();

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
        Schema::dropIfExists('users');
    }
};

