<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('feedback', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('email');
        $table->string('attending_staff');
        $table->string('request');
        $table->date('date_of_request');
        $table->string('client_office');
        $table->string('concerned_office');
        $table->integer('courtesy');
        $table->integer('quality');
        $table->integer('timeliness');
        $table->integer('efficiency');
        $table->text('comments')->nullable();
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
        Schema::dropIfExists('feedback');
    }
}
