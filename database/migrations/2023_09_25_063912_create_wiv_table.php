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
            $table->timestamps();
            $table->timestamp('received_at')->nullable();
            $table->date('wiv_date');
            $table->unsignedBigInteger('user_id');
            $table->timestamp('approved_at')->nullable();

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
