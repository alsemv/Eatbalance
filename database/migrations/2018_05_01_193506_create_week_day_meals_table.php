<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeekDayMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('week_day_meals', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('menu_day_id')->unsigned();
            $table->integer('meal_id')->unsigned();
            $table->integer('meal_time_id')->unsigned();
            $table->timestamps();

            $table->foreign('menu_day_id')->references('id')->on('menu_days')->onDelete('cascade');
            $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');
            $table->foreign('meal_time_id')->references('id')->on('meal_times')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('week_day_meals');
    }
}
