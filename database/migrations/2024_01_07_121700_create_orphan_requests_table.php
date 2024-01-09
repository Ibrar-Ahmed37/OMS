<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('orphan_requests', function (Blueprint $table) {
            $table->id();
            $table->string('ngo_name');
            $table->string('address');
            $table->string('contact_no');
            $table->string('orphan_name');
            $table->string('orphan_age');
            $table->string('orphan_gender');
            $table->text('orphan_description');
            $table->text('city');
            $table->text('orphan_bayform');
            $table->text('picture')->nullable();
            $table->text('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orphan_requests');
    }
};
