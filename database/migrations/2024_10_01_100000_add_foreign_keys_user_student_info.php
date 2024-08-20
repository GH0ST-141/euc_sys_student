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
        // REVIEW: This delays the creation of the foreign keys to avoid the
        // circular dependency problem when migrating.

        Schema::table('student_info', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('users');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('student_info_id')->references('id')->on('student_info');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
