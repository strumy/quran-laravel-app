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
        // Table: comments
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vnum');
            $table->integer('cnum');
            $table->text('ctext');
            $table->enum('comment_type', ['Translation', 'Explanation', 'Question', 'Comments'])->default('Question');
            $table->dateTime('date_published')->useCurrent();
            $table->integer('enabled');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
