<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('teacher_id');  

            $table->tinyInteger('obj1')->default(0);
            $table->tinyInteger('obj2')->default(0);
            $table->tinyInteger('obj3')->default(0);
            $table->tinyInteger('obj4')->default(0);
            $table->tinyInteger('obj5')->default(0);
            $table->tinyInteger('obj6')->default(0);
            $table->tinyInteger('obj7')->default(0);
            $table->tinyInteger('obj8')->default(0);
            $table->tinyInteger('obj9')->default(0);
            $table->tinyInteger('obj10')->default(0);
            $table->tinyInteger('obj11')->default(0);
            $table->tinyInteger('obj12')->default(0);
            $table->tinyInteger('obj13')->default(0);
            $table->tinyInteger('obj14')->default(0);
            $table->tinyInteger('obj15')->default(0);
            $table->tinyInteger('obj16')->default(0);
            $table->tinyInteger('obj17')->default(0);
            $table->tinyInteger('obj18')->default(0);
            $table->tinyInteger('obj19')->default(0);
            $table->tinyInteger('obj20')->default(0);
            $table->tinyInteger('obj21')->default(0);
            $table->tinyInteger('obj22')->default(0);
            $table->tinyInteger('obj23')->default(0);
            $table->tinyInteger('obj24')->default(0); 
            

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
        Schema::dropIfExists('items');
    }
}
