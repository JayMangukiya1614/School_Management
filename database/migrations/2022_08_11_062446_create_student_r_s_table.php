<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_r_s', function (Blueprint $table) {
            $table->id();
            $table->string('ST_ID')->nullable();
            $table->string('First_Name')->nullable();
            $table->string('Middle_Name')->nullable();
            $table->string('Last_Name')->nullable();
            $table->string('MobileNo')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Address')->nullable();
            $table->string('Class')->nullable();
            $table->string('Year')->nullable();
            $table->string('E_mail')->nullable();
            $table->string('Religion')->nullable();
            $table->string('Date_Of_Birth')->nullable();
            $table->string('Student_image')->nullable();

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
        Schema::dropIfExists('student_r_s');
    }
}
