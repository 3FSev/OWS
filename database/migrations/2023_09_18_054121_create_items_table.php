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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('description', 500)->nullable();
            $table->integer('quantity');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('item_status_id');
            $table->integer('unit_cost')->nullable();
            $table->integer('freight')->nullable();
            $table->integer('extended_cost')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
