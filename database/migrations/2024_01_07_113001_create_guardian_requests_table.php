<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('guardian_requests', function (Blueprint $table) {
            $table->id();
            $table->string('mother_name');
            $table->string('mother_cnic');
            $table->string('father_name');
            $table->string('father_cnic');
            $table->string('parent_contact_number');
            $table->string('address');
            $table->string('child_name');
            $table->string('bayform_number');
            $table->string('child_gender');
            $table->text('reason_to_register');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('guardian_requests');
    }
};
