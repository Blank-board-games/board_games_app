<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::truncate();
        Order::create([
            'email' => 'test1@test.com',
        ]);
        Order::create([
            'email' => 'test2@test.com',
        ]);
        Order::create([
            'email' => 'test3@test.com',
        ]);
    }
}
