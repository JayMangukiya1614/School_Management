<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkgradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markgrades', function (Blueprint $table) {
            $table->id();
            $table->string('Grade')->nullable();
            $table->string('Star_Mark')->nullable();
            $table->string('End_Mark')->nullable();
            $table->string('Remark')->nullable();
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
        Schema::dropIfExists('markgrades');
    }
}
