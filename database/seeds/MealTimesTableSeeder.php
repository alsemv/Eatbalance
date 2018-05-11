<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealTimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meal_times')->insert([
            ['name' => 'Завтрак', 'order' => 0],
            ['name' => 'Второй завтрак', 'order' => 1],
            ['name' => 'Обед', 'order' => 2],
            ['name' => 'Полдник', 'order' => 3],
            ['name' => 'Напиток', 'order' => 4],
            ['name' => 'Ужин', 'order' => 5],
            ['name' => 'Поздний ужин', 'order' => 6],
        ]);
    }
}
