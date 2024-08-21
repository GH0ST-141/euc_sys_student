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
        Schema::create('family_bg', function (Blueprint $table) {
            $table->id();
            $table->string('father');
            $table->string('father_address');
            $table->integer('father_cell_no');
            $table->string('mother');
            $table->string('mother_address');
            $table->integer('mother_cell_no');
            $table->string('guardian');
            $table->string('guardian_address');
            $table->integer('guardian_cell_no');
            $table->foreignId('student_id')->references('id')->on('student_info')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_bg');
    }
};
