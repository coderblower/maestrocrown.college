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
        Schema::create('admission_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('guardian_name')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('ssc_gpa');
            $table->string('group');
            $table->string('ssc_board')->nullable();
            $table->string('ssc_roll')->nullable();
            $table->string('passing_year')->default('2026');
            $table->text('address')->nullable();
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_inquiries');
    }
};
