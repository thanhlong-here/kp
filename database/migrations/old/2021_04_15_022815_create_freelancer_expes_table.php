<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelancerExpesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancer_expes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('freelancer_id');
            $table->string('company')->nullable();
            $table->string('position')->nullable();
            $table->mediumText('description')->nullable();
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
        Schema::dropIfExists('freelancer_expes');
    }
}
