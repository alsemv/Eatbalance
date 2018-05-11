<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeekDayMealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('week_day_meals')->insert([
            ['menu_day_id' => 1, 'meal_id' => 1, 'meal_time_id' => 1],
            ['menu_day_id' => 1, 'meal_id' => 2, 'meal_time_id' => 2],
            ['menu_day_id' => 1, 'meal_id' => 3, 'meal_time_id' => 3],
            ['menu_day_id' => 1, 'meal_id' => 4, 'meal_time_id' => 4],
            ['menu_day_id' => 1, 'meal_id' => 5, 'meal_time_id' => 6],
            ['menu_day_id' => 1, 'meal_id' => 6, 'meal_time_id' => 7],
            ['menu_day_id' => 2, 'meal_id' => 7, 'meal_time_id' => 1],
            ['menu_day_id' => 2, 'meal_id' => 8, 'meal_time_id' => 2],
            ['menu_day_id' => 2, 'meal_id' => 9, 'meal_time_id' => 3],
            ['menu_day_id' => 2, 'meal_id' => 10, 'meal_time_id' => 4],
            ['menu_day_id' => 2, 'meal_id' => 11, 'meal_time_id' => 6],
            ['menu_day_id' => 2, 'meal_id' => 12, 'meal_time_id' => 7],
            ['menu_day_id' => 3, 'meal_id' => 5, 'meal_time_id' => 1],
            ['menu_day_id' => 3, 'meal_id' => 8, 'meal_time_id' => 2],
            ['menu_day_id' => 3, 'meal_id' => 1, 'meal_time_id' => 3],
            ['menu_day_id' => 3, 'meal_id' => 10, 'meal_time_id' => 4],
            ['menu_day_id' => 3, 'meal_id' => 7, 'meal_time_id' => 6],
            ['menu_day_id' => 4, 'meal_id' => 12, 'meal_time_id' => 1],
            ['menu_day_id' => 4, 'meal_id' => 3, 'meal_time_id' => 2],
            ['menu_day_id' => 4, 'meal_id' => 9, 'meal_time_id' => 3],
            ['menu_day_id' => 4, 'meal_id' => 1, 'meal_time_id' => 4],
            ['menu_day_id' => 4, 'meal_id' => 7, 'meal_time_id' => 6],
            ['menu_day_id' => 5, 'meal_id' => 11, 'meal_time_id' => 1],
            ['menu_day_id' => 5, 'meal_id' => 2, 'meal_time_id' => 2],
            ['menu_day_id' => 5, 'meal_id' => 9, 'meal_time_id' => 3],
            ['menu_day_id' => 5, 'meal_id' => 12, 'meal_time_id' => 4],
            ['menu_day_id' => 5, 'meal_id' => 1, 'meal_time_id' => 6],
            ['menu_day_id' => 6, 'meal_id' => 2, 'meal_time_id' => 1],
            ['menu_day_id' => 6, 'meal_id' => 12, 'meal_time_id' => 2],
            ['menu_day_id' => 6, 'meal_id' => 10, 'meal_time_id' => 3],
            ['menu_day_id' => 6, 'meal_id' => 11, 'meal_time_id' => 4],
            ['menu_day_id' => 6, 'meal_id' => 3, 'meal_time_id' => 6],
            ['menu_day_id' => 7, 'meal_id' => 6, 'meal_time_id' => 1],
            ['menu_day_id' => 7, 'meal_id' => 2, 'meal_time_id' => 2],
            ['menu_day_id' => 7, 'meal_id' => 11, 'meal_time_id' => 3],
            ['menu_day_id' => 7, 'meal_id' => 3, 'meal_time_id' => 4],
            ['menu_day_id' => 7, 'meal_id' => 12, 'meal_time_id' => 6],
            ['menu_day_id' => 8, 'meal_id' => 14, 'meal_time_id' => 1],
            ['menu_day_id' => 8, 'meal_id' => 22, 'meal_time_id' => 2],
            ['menu_day_id' => 8, 'meal_id' => 13, 'meal_time_id' => 3],
            ['menu_day_id' => 8, 'meal_id' => 16, 'meal_time_id' => 4],
            ['menu_day_id' => 8, 'meal_id' => 20, 'meal_time_id' => 6],
            ['menu_day_id' => 9, 'meal_id' => 5, 'meal_time_id' => 1],
            ['menu_day_id' => 9, 'meal_id' => 14, 'meal_time_id' => 2],
            ['menu_day_id' => 9, 'meal_id' => 22, 'meal_time_id' => 3],
            ['menu_day_id' => 9, 'meal_id' => 23, 'meal_time_id' => 4],
            ['menu_day_id' => 9, 'meal_id' => 24, 'meal_time_id' => 6],
            ['menu_day_id' => 10, 'meal_id' => 14, 'meal_time_id' => 1],
            ['menu_day_id' => 10, 'meal_id' => 5, 'meal_time_id' => 2],
            ['menu_day_id' => 10, 'meal_id' => 17, 'meal_time_id' => 3],
            ['menu_day_id' => 10, 'meal_id' => 3, 'meal_time_id' => 4],
            ['menu_day_id' => 10, 'meal_id' => 19, 'meal_time_id' => 6],
            ['menu_day_id' => 11, 'meal_id' => 24, 'meal_time_id' => 1],
            ['menu_day_id' => 11, 'meal_id' => 4, 'meal_time_id' => 2],
            ['menu_day_id' => 11, 'meal_id' => 13, 'meal_time_id' => 3],
            ['menu_day_id' => 11, 'meal_id' => 16, 'meal_time_id' => 4],
            ['menu_day_id' => 11, 'meal_id' => 6, 'meal_time_id' => 6],
            ['menu_day_id' => 12, 'meal_id' => 17, 'meal_time_id' => 1],
            ['menu_day_id' => 12, 'meal_id' => 5, 'meal_time_id' => 2],
            ['menu_day_id' => 12, 'meal_id' => 19, 'meal_time_id' => 3],
            ['menu_day_id' => 12, 'meal_id' => 24, 'meal_time_id' => 4],
            ['menu_day_id' => 12, 'meal_id' => 20, 'meal_time_id' => 6],
            ['menu_day_id' => 13, 'meal_id' => 21, 'meal_time_id' => 1],
            ['menu_day_id' => 13, 'meal_id' => 19, 'meal_time_id' => 2],
            ['menu_day_id' => 13, 'meal_id' => 18, 'meal_time_id' => 3],
            ['menu_day_id' => 13, 'meal_id' => 17, 'meal_time_id' => 4],
            ['menu_day_id' => 13, 'meal_id' => 16, 'meal_time_id' => 6],
            ['menu_day_id' => 14, 'meal_id' => 15, 'meal_time_id' => 1],
            ['menu_day_id' => 14, 'meal_id' => 14, 'meal_time_id' => 2],
            ['menu_day_id' => 14, 'meal_id' => 13, 'meal_time_id' => 3],
            ['menu_day_id' => 14, 'meal_id' => 12, 'meal_time_id' => 4],
            ['menu_day_id' => 14, 'meal_id' => 11, 'meal_time_id' => 6],
        ]);
    }
}
