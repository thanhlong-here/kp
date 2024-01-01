<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->text('description');
            $table->string('attachfile')->nullable();
            $table->bigInteger('category_id');
            $table->string('delivery_unit')->nullable();
            $table->integer('delivery')->nullable();
            $table->bigInteger('budget')->nullable();
            $table->string('budget_unit')->nullable();
            $table->bigInteger('auth_id');
            $table->string('status')->nullable();//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_requests');
    }
}
