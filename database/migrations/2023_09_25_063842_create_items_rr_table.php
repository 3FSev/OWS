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
        Schema::create('items_rr', function (Blueprint $table) {
            $table->unsignedBigInteger('items_id');
            $table->unsignedBigInteger('rr_id');

            $table->foreign('items_id')->references('id')->on('items');
            $table->foreign('rr_id')->references('id')->on('rr');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items_rr');
    }
};
