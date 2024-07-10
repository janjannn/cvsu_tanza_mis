<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailySessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dtr_id');
            $table->time('start_time');
            $table->time('end_time')->nullable();
            $table->string('time_period');
            $table->timestamps();

            $table->unique(['dtr_id','time_period']);
            $table->foreign('dtr_id')->references('id')->on('dtrs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_sessions');
    }
}
