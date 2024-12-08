<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('semester');
            $table->string('student_id');
            $table->string('subject');
            $table->date('birth_year');
            $table->integer('admission_year');
            $table->string('email');
            $table->string('institute_name');
            $table->integer('chest_size');
            $table->integer('height');
            $table->integer('weight');
            $table->string('blood_group');
            $table->string('doctors_speech');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('nationality');
            $table->string('religion');
            $table->string('interested_area');
            $table->boolean('agree_bncc_rules');
            $table->text('purpose_in_life');
            $table->date('form_date');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
