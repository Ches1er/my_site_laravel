<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->mediumText('short_event');
            $table->mediumText('full_event');
            $table->string('img');
            $table->timestamp('date');
            $table->timestamp('expiration');
            $table->bigInteger('sales_area_id')->unsigned();
            $table->timestamps();

            $table->foreign('sales_area_id')->references('id')->on('sales_area');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
