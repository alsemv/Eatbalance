<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuDaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_days')->insert([
            ['menu_id' => 1, 'week_day_id' => 1],
            ['menu_id' => 1, 'week_day_id' => 2],
            ['menu_id' => 1, 'week_day_id' => 3],
            ['menu_id' => 1, 'week_day_id' => 4],
            ['menu_id' => 1, 'week_day_id' => 5],
            ['menu_id' => 1, 'week_day_id' => 6],
            ['menu_id' => 1, 'week_day_id' => 7],
            ['menu_id' => 2, 'week_day_id' => 1],
            ['menu_id' => 2, 'week_day_id' => 2],
            ['menu_id' => 2, 'week_day_id' => 3],
            ['menu_id' => 2, 'week_day_id' => 4],
            ['menu_id' => 2, 'week_day_id' => 5],
            ['menu_id' => 2, 'week_day_id' => 6],
            ['menu_id' => 2, 'week_day_id' => 7],
        ]);
    }
}
