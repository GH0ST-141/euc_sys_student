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
            // Basic Info
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('street');
            $table->string('barangay');
            $table->string('city');
            $table->string('province');
            $table->string('region');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('citizenship');
            $table->string('religion');
            $table->string('gender');
            $table->string('civil_status');
            $table->integer('cell_no');
            $table->string('email');
            // Family BG
            $table->string('father');
            $table->string('father_address');
            $table->integer('father_cell_no');
            $table->string('mother');
            $table->string('mother_address');
            $table->integer('mother_cell_no');
            $table->string('guardian');
            $table->string('guardian_address');
            $table->integer('guardian_cell_no');
            // Educ BG
            $table->string('elem');
            $table->string('elem_address');
            $table->string('elem_grad_yr');
            $table->string('jhs');
            $table->string('jhs_address');
            $table->string('jhs_grad_yr');
            $table->string('shs');
            $table->string('shs_address');
            $table->string('shs_grad_yr');
            $table->string('prev_univ');
            $table->string('prev_univ_grad_yr');
            // Credentials
            $table->binary('shs_hs_card')->nullable();
            $table->binary('good_moral')->nullable();
            $table->binary('birth_cert')->nullable();
            $table->binary('2x2_pic')->nullable();
            $table->binary('entrance_exam_res')->nullable();
            $table->binary('phys_test_res')->nullable();
            $table->binary('tor')->nullable();
            $table->binary('transfer_cred')->nullable();
            // Course and foreign keys
            $table->foreignUuid('course_id')->references('id')->on('courses');
            $table->foreignId('user_id')->references('id')->on('users');
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
