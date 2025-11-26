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
        // Table: languages
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 70);
            $table->string('iso_code', 50);
            $table->integer('direction');
            $table->integer('enabled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};
