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
        // Table: chapters
        Schema::create('chapters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number');
            $table->string('english_name', 1000);
            $table->string('arabic_name', 1000);
            $table->string('transliteration', 1000);
            $table->integer('total_verses')->nullable();
            $table->integer('enabled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
