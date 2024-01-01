<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelancerEdusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancer_edus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('freelancer_id');
            $table->string('school')->nullable();
            $table->string('major')->nullable();
            $table->string('state')->nullable();
            $table->date('at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('freelancer_edus');
    }
}
