<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('teacher_id');  

            $table->tinyInteger('f1')->default(0);
            $table->tinyInteger('f2')->default(0);
            $table->tinyInteger('f3')->default(0);
            $table->tinyInteger('p1')->default(0);
            $table->tinyInteger('p2')->default(0);
            $table->tinyInteger('p3')->default(0);
            $table->tinyInteger('h1')->default(0);
            $table->tinyInteger('h2')->default(0);
            $table->tinyInteger('h3')->default(0);
            $table->tinyInteger('m1')->default(0);
            $table->tinyInteger('m2')->default(0);
            $table->tinyInteger('m3')->default(0);

            

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
        Schema::dropIfExists('stages');
    }
}
