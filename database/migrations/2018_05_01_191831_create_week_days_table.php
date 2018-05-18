<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeekDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('week_days', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('week_days')->insert([
            ['name' => 'Понедельник'],
            ['name' => 'Вторник'],
            ['name' => 'Среда'],
            ['name' => 'Четверг'],
            ['name' => 'Пятница'],
            ['name' => 'Суббота'],
            ['name' => 'Воскресенье'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('week_days');
    }
}
