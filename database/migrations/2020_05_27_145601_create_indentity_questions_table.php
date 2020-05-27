<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndentityQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indentity_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('teacher_id');    

            // Función Selectiva
            $table->tinyInteger('fs1')->default(0);
            $table->tinyInteger('fs2')->default(0);
            $table->tinyInteger('fs3')->default(0);
            $table->tinyInteger('fs4')->default(0);
            $table->tinyInteger('fs5')->default(0);
            $table->tinyInteger('fs6')->default(0);

            // Función Locativa
            $table->tinyInteger('fl1')->default(0);
            $table->tinyInteger('fl2')->default(0);
            $table->tinyInteger('fl3')->default(0);
            $table->tinyInteger('fl4')->default(0);
            $table->tinyInteger('fl5')->default(0);
            
            // Función Integrativa
            $table->tinyInteger('fi1')->default(0);
            $table->tinyInteger('fi2')->default(0);
            $table->tinyInteger('fi3')->default(0);
            $table->tinyInteger('fi4')->default(0);
            $table->tinyInteger('fi5')->default(0);
            $table->tinyInteger('fi6')->default(0);
            $table->tinyInteger('fi7')->default(0);
            $table->tinyInteger('fi8')->default(0);
            $table->tinyInteger('fi9')->default(0);
            $table->tinyInteger('fi10')->default(0);
            $table->tinyInteger('fi11')->default(0);
            $table->tinyInteger('fi12')->default(0);

            $table->tinyInteger('fi13')->default(0);
            $table->tinyInteger('fi14')->default(0);
            $table->tinyInteger('fi15')->default(0);
            $table->tinyInteger('fi16')->default(0);
            $table->tinyInteger('fi17')->default(0);
            $table->tinyInteger('fi18')->default(0);

            $table->tinyInteger('fi19')->default(0);
            $table->tinyInteger('fi20')->default(0);
            $table->tinyInteger('fi21')->default(0);
            $table->tinyInteger('fi22')->default(0);
            $table->tinyInteger('fi23')->default(0);
            $table->tinyInteger('fi24')->default(0);
            $table->tinyInteger('fi25')->default(0);
            $table->tinyInteger('fi26')->default(0);
            $table->tinyInteger('fi27')->default(0);
            $table->tinyInteger('fi28')->default(0);
            $table->tinyInteger('fi29')->default(0);
            $table->tinyInteger('fi30')->default(0);
            $table->tinyInteger('fi31')->default(0);
            $table->tinyInteger('fi32')->default(0);
            $table->tinyInteger('fi33')->default(0);
            $table->tinyInteger('fi34')->default(0);
            $table->tinyInteger('fi35')->default(0);
            $table->tinyInteger('fi36')->default(0);

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
        Schema::dropIfExists('indentity_questions');
    }
}
