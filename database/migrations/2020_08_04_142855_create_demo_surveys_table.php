<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemoSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demo_surveys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('teacher_id'); 

            $table->string("q1")->default("");
            $table->string("q2")->default("");
            $table->string("q3")->default("");
            $table->string("q4")->default("");
            $table->string("q5")->default("");
            $table->string("q6")->default("");
            $table->string("q7")->default("");
            $table->string("q8")->default("");
            $table->string("q9")->default("");

            $table->foreign('teacher_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('demo_surveys');
    }
}
