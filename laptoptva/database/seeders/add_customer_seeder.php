<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_customer_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'customer_name' => 'Trần Văn An',
            'customer_phone' => '123456789',
        ]);
        DB::table('customers')->insert([
            'customer_name' => 'Hoàng Văn Thế',
            'customer_phone' => '123456789',
        ]);
        DB::table('customers')->insert([
            'customer_name' => 'Nguyễn Trung Thứ',
            'customer_phone' => '321654987',
        ]);
        DB::table('customers')->insert([
            'customer_name' => 'Sơn idol giới trẻ',
            'customer_phone' => '654987321',
        ]);
    }
}
