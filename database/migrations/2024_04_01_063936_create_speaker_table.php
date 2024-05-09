<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speaker', function (Blueprint $table) {
            $table->id();
            $table->string('Name',255);
            $table->text('bio',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('adderess',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('phone',11)->nullable();
            $table->string('description',100)->nullable();
            $table->string('sessiontype',100)->nullable();
            $table->string('sessiontitle',100)->nullable();
            $table->unsignedBigInteger('eventid');
            $table->foreign('eventid')->references('eventid')->on('events');
            $table->string('image',100);

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speaker');
    }
}
