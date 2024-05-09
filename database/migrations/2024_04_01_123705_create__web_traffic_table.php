<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebTrafficTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webtraffic', function (Blueprint $table) {
            $table->id();
            $table->string('Company Name',60);
            $table->string('Product',50);
            $table->string('Number of Visitor',60);
            $table->string('cost',50);
            $table->string('BounceRate',50);
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webtraffic');
    }
}
