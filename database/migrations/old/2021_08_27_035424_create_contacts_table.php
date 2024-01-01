<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('prefix')->nullable();
            $table->bigInteger('sender_id')->nullable();
            $table->bigInteger('user_id');
            $table->bigInteger('parent_id');
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('type')->nullable(); //post/reply
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
