<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsoldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketsold', function (Blueprint $table) {
            $table->id('ticketid');
            $table->unsignedBigInteger('eventid');
            $table->foreign('eventid')->references('eventid')->on('events');
            $table->string('cost',50)->nullable();
            $table->string('Quantity',50)->nullable();
            
            $table->string('type',50)->nullable();
            $table->string('startDate',6);
            $table->string('endDate',6);
            
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticketsold');
    }
}
