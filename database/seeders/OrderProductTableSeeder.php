<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orderproduct')->truncate();
        DB::table('orderproduct')->insert([
            'order_id' => 2,
            'product_id' => 2,
            'quantity' => 4, 
            'product_price' => 5.99,
        ]);
        DB::table('orderproduct')->insert([
            'order_id' => 1,
            'product_id' => 3,
            'quantity' => 4, 
            'product_price' => 9.99,
        ]);
        DB::table('orderproduct')->insert([
            'order_id' => 2,
            'product_id' => 1,
            'quantity' => 5, 
            'product_price' => 5.99,
        ]);
        DB::table('orderproduct')->insert([
            'order_id' => 3,
            'product_id' => 6,
            'quantity' => 7, 
            'product_price' => 9.99,
        ]);
    }
}
