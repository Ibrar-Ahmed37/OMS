<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');
            $table->text('comments')->nullable();
            $table->decimal('amount', 10, 2);
            $table->string('payment_mode');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donations');
    }
};
