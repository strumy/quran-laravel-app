
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
        // Table: verses
        Schema::create('verses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number');
            $table->string('vtext', 10000);
            $table->integer('enabled');
            $table->unsignedInteger('author_id')->nullable();
            $table->unsignedInteger('chapter_id')->nullable();
            $table->unsignedInteger('vlang_id')->nullable();
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('chapter_id')->references('id')->on('chapters')->onDelete('cascade');
            $table->foreign('vlang_id')->references('id')->on('languages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verses');
    }
};