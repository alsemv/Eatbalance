<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenusTableSeeder::class);
        $this->command->info('Menus table seeded!');

        $this->call(MenuDaysTableSeeder::class);
        $this->command->info('MenuDays table seeded!');

        $this->call(MealsTableSeeder::class);
        $this->command->info('Meals table seeded!');

        $this->call(MealTimesTableSeeder::class);
        $this->command->info('Meal_times table seeded!');

        $this->call(WeekDayMealsTableSeeder::class);
        $this->command->info('week_day_meals table seeded!');
    }
}
