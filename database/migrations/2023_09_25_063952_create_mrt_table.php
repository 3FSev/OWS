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
        Schema::create('mrt', function (Blueprint $table) {
            $table->id();
            $table->string('mrt_number')->unique();
            $table->timestamp('received_at')->nullable();
            $table->date('mrt_date');
            $table->unsignedBigInteger('user_id');
            $table->string('created_by', 255);
            $table->string('approved_by', 255)->nullable();
            $table->timestamp('approved_at')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mrt');
    }
};
