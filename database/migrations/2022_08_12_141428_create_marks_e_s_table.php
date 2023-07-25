<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks_e_s', function (Blueprint $table) {
            $table->id();
            $table->string('Student_Id')->nullable();
            $table->string('Student_Name')->nullable();
            $table->string('Student_Class')->nullable();
            $table->integer('Student_Year')->nullable();
            $table->string('Student_Subject')->nullable();
            $table->string('Student_Grade')->nullable();
            $table->integer('Total_Marks')->nullable();
            $table->integer('Obtain_Marks')->nullable();
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
        Schema::dropIfExists('marks_e_s');
    }
}
