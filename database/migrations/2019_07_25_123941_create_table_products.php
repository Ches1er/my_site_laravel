<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('brand_id')->unsigned();
            $table->bigInteger('sales_area_id')->unsigned();
            $table->bigInteger('applying_group_id')->unsigned();
            $table->boolean('active');
            $table->string('img');
            $table->text('tech_info');
            $table->timestamps();

            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('sales_area_id')->references('id')->on('sales_area');
            $table->foreign('applying_group_id')->references('id')->on('applying_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
