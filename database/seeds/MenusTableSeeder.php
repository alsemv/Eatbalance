<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            ['name' => 'Набор - 3500ккал', 'price' => 497],
            ['name' => 'Набор - 2500ккал', 'price' => 497],
        ]);
    }
}
