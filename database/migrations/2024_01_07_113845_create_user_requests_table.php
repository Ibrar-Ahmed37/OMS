<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_requests', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_contact_number');
            $table->string('user_gender');
            $table->string('user_cnic');
            $table->string('orphan_name');
            $table->string('orphan_gender');
            $table->string('age');
            $table->text('rescue_location');       
            $table->text('picture')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_requests');
    }
};
