<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('teacher_id');
            $table->tinyInteger('demoSurveyCompleted')->default(0);;
            $table->tinyInteger('identSurveyCompleted')->default(0);;

            $table->tinyInteger('q1')->default(0);
            $table->tinyInteger('q2')->default(0);
            $table->tinyInteger('q3')->default(0);
            $table->tinyInteger('q4')->default(0);
            $table->tinyInteger('q5')->default(0);
            $table->tinyInteger('q6')->default(0);
            $table->tinyInteger('q7')->default(0);
            $table->tinyInteger('q8')->default(0);
            $table->tinyInteger('q9')->default(0);
            $table->tinyInteger('q10')->default(0);
            $table->tinyInteger('q11')->default(0);
            $table->tinyInteger('q12')->default(0);
            $table->tinyInteger('q13')->default(0);
            $table->tinyInteger('q14')->default(0);
            $table->tinyInteger('q15')->default(0);
            $table->tinyInteger('nunca')->default(0);
            $table->tinyInteger('aveces')->default(0);
            $table->tinyInteger('siempre')->default(0);
            $table->timestamps();

            $table->foreign('teacher_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
