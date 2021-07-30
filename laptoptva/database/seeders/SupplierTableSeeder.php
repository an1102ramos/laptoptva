<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'sub_name' => 'Dell VN',
            'sub_address' => 'Hà Nội',
            'sub_phone' => '0326222518',
        ]);
        DB::table('suppliers')->insert([
            'sub_name' => 'Dell SG',
            'sub_address' => 'Hà Nội',
            'sub_phone' => '0326222518',
        ]);
        DB::table('suppliers')->insert([
            'sub_name' => 'Dell Pro',
            'sub_address' => 'TP Hồ Chí Minh',
            'sub_phone' => '0326222518',
        ]);
        DB::table('suppliers')->insert([
            'sub_name' => 'Dell AVT',
            'sub_address' => 'Hà Nội',
            'sub_phone' => '0326222518',
        ]);
    }
}
