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
        Schema::create('rr', function (Blueprint $table) {
            $table->id();
            $table->string('rr_number')->unique();
            $table->date('rr_date')->unique();
            $table->string('supplier');
            $table->string('address');
            $table->string('riv')->nullable();
            $table->date('riv_date')->nullable();
            $table->string('cs')->nullable();
            $table->date('cs_date')->nullable();
            $table->string('aoc')->nullable();
            $table->date('aoc_date')->nullable();
            $table->string('po')->nullable();
            $table->date('po_date')->nullable();
            $table->string('cv')->nullable();
            $table->date('cv_date')->nullable();
            $table->string('dr')->nullable();
            $table->date('dr_date')->nullable();
            $table->string('inv')->nullable();
            $table->date('inv_date')->nullable();
            $table->string('or')->nullable();
            $table->date('or_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rr');
    }
};
