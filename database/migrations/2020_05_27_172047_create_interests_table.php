<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('teacher_id');  

            $table->tinyInteger('i1')->default(0);
            $table->tinyInteger('i2')->default(0);
            $table->tinyInteger('i3')->default(0);
            $table->tinyInteger('i4')->default(0);
            $table->tinyInteger('i5')->default(0);
            $table->tinyInteger('i6')->default(0);
            $table->tinyInteger('i7')->default(0);
            $table->tinyInteger('i8')->default(0);
            $table->tinyInteger('i9')->default(0);
            $table->tinyInteger('i10')->default(0);
            $table->tinyInteger('i11')->default(0);
            $table->tinyInteger('i12')->default(0);

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
        Schema::dropIfExists('interests');
    }
}
