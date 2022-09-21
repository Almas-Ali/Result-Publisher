<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('roll');
            $table->string('registration');
            $table->string('year');
            $table->string('grade');
            $table->string('gpa');
            $table->string('group');
            
            // subjects
            $table->string('bangla');
            $table->string('english');
            $table->string('math');
            $table->string('physics');
            $table->string('chemistry');
            $table->string('biology');
            $table->string('ict');
            $table->string('religion');
            $table->string('social_science');

            // subjects grades
            $table->string('bangla_grade');
            $table->string('english_grade');
            $table->string('math_grade');
            $table->string('physics_grade');
            $table->string('chemistry_grade');
            $table->string('biology_grade');
            $table->string('ict_grade');
            $table->string('religion_grade');
            $table->string('social_science_grade');

            // subjects gpa
            $table->string('bangla_gpa');
            $table->string('english_gpa');
            $table->string('math_gpa');
            $table->string('physics_gpa');
            $table->string('chemistry_gpa');
            $table->string('biology_gpa');
            $table->string('ict_gpa');
            $table->string('religion_gpa');
            $table->string('social_science_gpa');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Result');
    }
};
