<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_s', function (Blueprint $table) {
            $table->id();
       
            $table->string('First_Name')->nullable();
            $table->string('Last_Name')->nullable();
            $table->string('Mobile_Nomber')->nullable();
            $table->string('Education')->nullable();
            $table->string('Address')->nullable();
            $table->string('Gender')->nullable();
            $table->string('City')->nullable();
            $table->string('E_mail')->nullable();
            $table->string('Password')->nullable();

           
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
        Schema::dropIfExists('admin_s');
    }
}
