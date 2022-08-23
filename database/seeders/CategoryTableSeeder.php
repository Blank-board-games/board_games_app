<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        Category::create(array(
            'title' => 'Family Games',
        ));
        Category::create(array(
            'title' => 'Tile-based Games',
        ));
        Category::create(array(
            'title' => 'Card Games',
        ));
        Category::create(array(
            'title' => 'Strategy Games',
        ));
        Category::create(array(
            'title' => 'Word Games',
        ));
    }
}
