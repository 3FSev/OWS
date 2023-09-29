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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('role_id');
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('department_id')->references('id')->on('department');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropForeign(['department_id']);
        $table->dropForeign(['roles_id']);

        $table->dropColumn('department_id');
        $table->dropColumn('roles_id');
        $table->dropColumn('approved_at');
        $table->dropColumn('deleted_at');
    });
}

};
