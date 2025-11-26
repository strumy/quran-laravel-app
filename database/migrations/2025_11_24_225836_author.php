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
        // Table: authors
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250);
            $table->string('country', 250)->nullable();
            $table->string('city', 250)->nullable();
            $table->string('translation_source', 50)->nullable();
            $table->dateTime('date_published')->nullable();
            $table->integer('enabled');
            $table->unsignedInteger('alang')->nullable();
            $table->foreign('alang')->references('id')->on('languages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
