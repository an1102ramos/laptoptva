<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Order_DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            'order_id' => '1',
            'prd_id' => '1',
            'retail_price' => '14000000',
            'quantity' => '1',
        ]);
        DB::table('order_details')->insert([
            'order_id' => '2',
            'prd_id' => '2',
            'retail_price' => '10000000',
            'quantity' => '1',
        ]);
        DB::table('order_details')->insert([
            'order_id' => '3',
            'prd_id' => '3',
            'retail_price' => '11000000',
            'quantity' => '1',
        ]);
        DB::table('order_details')->insert([
            'order_id' => '4',
            'prd_id' => '4',
            'retail_price' => '12000000',
            'quantity' => '1',
        ]);
    }
}
