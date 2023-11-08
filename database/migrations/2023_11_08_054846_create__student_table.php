<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_student', function (Blueprint $table) {
            $table->id("st_id");
            $table->string('name');
            $table->string('email',"25");
            $table->string("password");
            $table->integer("number")->nullable();
            $table->string("usertype")->default("user");           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_student');
    }
};
