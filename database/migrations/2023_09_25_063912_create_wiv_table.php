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
        Schema::create('wiv', function (Blueprint $table) {
            $table->id();
            $table->string('wiv_number')->unique();
            $table->timestamp('received_at')->nullable();
            $table->date('wiv_date');
            $table->unsignedBigInteger('user_id');
            $table->string('created_by', 255);
            $table->string('approved_by', 255)->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('accepted_at')->nullable();
            $table->timestamp('rejected_at')->nullable();
            $table->string('rejected_by', 255)->nullable();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wiv');
    }
};
