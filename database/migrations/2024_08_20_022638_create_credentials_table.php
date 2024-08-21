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
        Schema::create('credentials', function (Blueprint $table) {
            $table->id();
            $table->binary('shs_hs_card')->nullable();
            $table->binary('good_moral')->nullable();
            $table->binary('birth_cert')->nullable();
            $table->binary('2x2_pic')->nullable();
            $table->binary('entrance_exam_res')->nullable();
            $table->binary('phys_test_res')->nullable();
            $table->binary('tor')->nullable();
            $table->binary('transfer_cred')->nullable();
            $table->foreignId('student_id')->references('id')->on('student_info')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credentials');
    }
};
