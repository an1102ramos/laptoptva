<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'customer_name' => 'Trần Văn An',
            'customer_address' => 'Hà Nội',
            'customer_phone' => '0326222518',
            'order_total' => '12000000',
        ]);
        DB::table('orders')->insert([
            'customer_name' => 'Trịnh Minh Thảo',
            'customer_address' => 'Hà Nội',
            'customer_phone' => '0326222518',
            'order_total' => '12000000',
        ]);
        DB::table('orders')->insert([
            'customer_name' => 'Hoàng Văn Thế',
            'customer_address' => 'TP Hồ Chí Minh',
            'customer_phone' => '0326222518',
            'order_total' => '12000000',
        ]);
        DB::table('orders')->insert([
            'customer_name' => 'Nguyễn Trung thứ',
            'customer_address' => 'Hà Nội',
            'customer_phone' => '0326222518',
            'order_total' => '12000000',
        ]);
    }
}
