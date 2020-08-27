<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            ['description' => 'STRAWWEIGHT', 'weight' => '115', 'genre' => 'F'],
            ['description' => 'FLYWEIGHT', 'weight' => '125', 'genre' => 'F'],
            ['description' => 'BANTAMWEIGHT', 'weight' => '135', 'genre' => 'F'],
            ['description' => 'FLYWEIGHT', 'weight' => '125', 'genre' => 'M'],
            ['description' => 'BANTAMWEIGHT', 'weight' => '135', 'genre' => 'M'],
            ['description' => 'FEATHERWEIGHT', 'weight' => '145', 'genre' => 'M'],
            ['description' => 'LIGHTWEIGHT', 'weight' => '155', 'genre' => 'M'],
            ['description' => 'WELTERWEIGHT', 'weight' => '170', 'genre' => 'M'],
            ['description' => 'MIDDLEWEIGHT', 'weight' => '185', 'genre' => 'M'],
            ['description' => 'LIGHT HEAVYWEIGHT', 'weight' => '205', 'genre' => 'M'],
            ['description' => 'HEAVYWEIGHT', 'weight' => '265', 'genre' => 'M'],
        ];

        foreach($list as $item){
            \App\Category::create($item);
        }
    }
}
