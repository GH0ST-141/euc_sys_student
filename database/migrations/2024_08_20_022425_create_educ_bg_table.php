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
        Schema::create('educ_bg', function (Blueprint $table) {
            $table->id();
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educ_bg');
    }
};
