<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            // Only apply the unique constraint if it doesn't exist
            $table->string('student_id')->unique()->change(); // If student_id column already has unique constraint, this will be skipped.
            
            // Change the rest of the columns to strings where appropriate
            $table->string('name')->change();
            $table->string('semester')->change();
            $table->string('email')->unique()->change();
            $table->string('subject')->change();
            $table->string('birth_year')->change(); // Store as string
            $table->string('admission_year')->change();
            $table->string('institute_name')->change();
            $table->string('chest_size')->change();
            $table->string('height')->change();
            $table->string('weight')->change();
            $table->string('blood_group')->change();
            $table->string('doctors_speech')->change();
            $table->string('fathers_name')->change();
            $table->string('mothers_name')->change();
            $table->string('nationality')->change();
            $table->string('religion')->change();
            $table->string('interested_area')->change();
            $table->boolean('agree_bncc_rules')->change();
            $table->string('purpose_in_life')->change();
            $table->string('form_date')->change();
            $table->string('image')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            // Reverse changes if needed
            $table->date('birth_year')->change();
            $table->date('form_date')->change();
            $table->integer('chest_size')->change();
            $table->integer('height')->change();
            $table->integer('weight')->change();
            $table->dropColumn('image'); // If you no longer need the image column
        });
    }
}
