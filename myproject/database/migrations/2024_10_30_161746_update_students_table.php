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
        Schema::table('students', function (Blueprint $table) {
            
            $table->string('Student_Name');
            $table->string('Student_Email')->unique();
            $table->integer('Student_Phone');
            $table->unsignedBigInteger('St_Teacher_id');
            $table->unsignedBigInteger('St_subject_id');
            $table->foreign('St_Teacher_id')->references('Teacher_id')->on('teachers');
            $table->foreign('St_subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
