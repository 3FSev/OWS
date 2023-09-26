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
        Schema::create('items__mrt', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('mrt_id');
            $table->integer('quantity');
            $table->integer('usable');
            $table->integer('non-usable');

            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('mrt_id')->references('id')->on('mrt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items__mrt');
    }
};
