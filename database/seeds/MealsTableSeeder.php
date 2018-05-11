<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meals')->insert([
            ['name' => 'Гречневая каша на молоке с кешью', 'calories' => 850, 'weight' => 250, 'image' => '/uploads/meals/b05597b42a702e9a05c3799e02331531.jpg'],
            ['name' => 'Сырники с запеченной тыквой', 'calories' => 708, 'weight' => 250, 'image' => '/uploads/meals/ed709982a562435baf34a3f7ff6dc099.jpg'],
            ['name' => 'Соба с кунжутом и зеленью', 'calories' => 492, 'weight' => 250, 'image' => '/uploads/meals/b7f0ae17c4a931a3c53d985a7b1d613c.jpg'],
            ['name' => 'Бургер с филе красной рыбы', 'calories' => 418, 'weight' => 250, 'image' => '/uploads/meals/92a6ce969cb95a77f94fd989c2c0a400.jpg'],
            ['name' => 'Микс из красной киноа с булгуром', 'calories' => 226, 'weight' => 250, 'image' => '/uploads/meals/de0c2880210f2b724f28b0a4e783fa7f.jpg'],
            ['name' => 'Запеченное филе хека с начинкой из шпината и грибов с маринованными томатами', 'calories' => 239, 'weight' => 250, 'image' => '/uploads/meals/d6e2057996c2dd8fd8a28db898d8b7a4.jpg'],
            ['name' => 'Манник с курагой и джемом', 'calories' => 650, 'weight' => 250, 'image' => '/uploads/meals/6211b3e8d6284c13af435b89d350f188.jpg'],
            ['name' => 'Омлет с тофу', 'calories' => 372, 'weight' => 250, 'image' => '/uploads/meals/b9b72688ded313ae38da5ec46bce0095.jpg'],
            ['name' => 'Отварной рис с зеленью', 'calories' => 412, 'weight' => 250, 'image' => '/uploads/meals/c4e4ffee4441960a68990672d86114cd.jpg'],
            ['name' => 'Рассыпчатая греча с орехами кешью и зеленью', 'calories' => 371, 'weight' => 250, 'image' => '/uploads/meals/dee61bb4ee8b87d1cda68dc0b7d09e2b.jpg'],
            ['name' => 'Кус-кус с зеленью и оливковым маслом', 'calories' => 430, 'weight' => 250, 'image' => '/uploads/meals/1f2c80da22f0e4a8c18140c765c6c740.jpg'],
            ['name' => 'Ломтики трески, запеченные в пергаменте с лимоном', 'calories' => 242, 'weight' => 250, 'image' => '/uploads/meals/b151e38bd533e1e37d692cad4c18e1e1.jpg'],
            ['name' => 'Пшенная каша на молоке с запеченной тыквой', 'calories' => 267, 'weight' => 250, 'image' => '/uploads/meals/4afc1494fe1c7586e475797f5d792fa7.jpg'],
            ['name' => 'Омлет с томатами', 'calories' => 267, 'weight' => 250, 'image' => '/uploads/meals/ed673484bd0950e2051d2e68cfcf2e4e.jpg'],
            ['name' => 'Гречневая лапша соба с кунжутом и зеленью', 'calories' => 267, 'weight' => 250, 'image' => '/uploads/meals/5749d75424dd8dac65b69d90478c304d.jpg'],
            ['name' => 'Сэндвич с овощным омлетом и запеченным филе индейки', 'calories' => 267, 'weight' => 250, 'image' => '/uploads/meals/68c29f23024855d7f8531e053f509499.jpg'],
            ['name' => 'Барли с грибами и зеленью', 'calories' => 267, 'weight' => 250, 'image' => '/uploads/meals/157489f4a1bee26e2513a647a01a4a13.jpg'],
            ['name' => 'Обезжиренный рассыпчатый творог с запеченной грушей', 'calories' => 267, 'weight' => 250, 'image' => '/uploads/meals/2e48de423881fc2c09423fe100a61a3a.jpg'],
            ['name' => 'Панкейки из гречневой муки с ягодным бескалорийным джемом', 'calories' => 267, 'weight' => 250, 'image' => '/uploads/meals/8999e073d24b3e3ecdd55bdfd8cb9fe3.jpg'],
            ['name' => 'Запеканка из обезжиренного творога', 'calories' => 267, 'weight' => 250, 'image' => '/uploads/meals/849b412e8c7da4daf099ac26009df943.jpg'],
            ['name' => 'Рассыпчатая греча с зеленью', 'calories' => 267, 'weight' => 250, 'image' => '/uploads/meals/54c43a4ed39a13d844b728bb50c496f5.jpg'],
            ['name' => 'Лапша удон с зеленью', 'calories' => 267, 'weight' => 250, 'image' => '/uploads/meals/7fd39a4df3707e0cd6fc42e77b31b23f.jpg'],
            ['name' => 'Отварной рис с зеленью', 'calories' => 267, 'weight' => 250, 'image' => '/uploads/meals/6bf675b3737ecf4053080e013be2202f.jpg'],
            ['name' => 'Печеное яблоко с творогом и мюсли', 'calories' => 267, 'weight' => 250, 'image' => '/uploads/meals/628c0264454a26f77845040c4b5e51c5.jpg'],
        ]);
    }
}
