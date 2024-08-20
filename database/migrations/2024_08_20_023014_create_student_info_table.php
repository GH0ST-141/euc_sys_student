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
        Schema::create('student_info', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('street');
            $table->string('brgy');
            $table->string('municipality');
            $table->string('province');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('citizenship');
            $table->string('religion');
            $table->string('gender');
            $table->string('civil_status');
            $table->integer('cell_no');
            $table->string('email');
            $table->foreignUuid('course_id')->references('id')->on('courses');
            $table->foreignId('family_bg_id')->references('id')->on('family_bg')->onDelete('cascade');
            $table->foreignId('educ_bg_id')->references('id')->on('educ_bg')->onDelete('cascade');
            $table->foreignId('creds_id')->references('id')->on('credentials')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_info');
    }
};
