<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isue', function (Blueprint $table) {
            $table->bigIncrements('no');
            $table->string('id');
            $table->string('user_id');
            $table->string('ComputerLab');
            $table->string('machineSerial');
            $table->string('hardwareSoftware');
            $table->string('type')->default('software');
            $table->string('discription')->default('software');
            $table->string('softwarediscription')->default('hardware');

            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('isue');
    }
}
