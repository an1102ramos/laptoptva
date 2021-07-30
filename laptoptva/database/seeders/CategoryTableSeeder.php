<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'cat_name' => 'Dell Gaming',
            'sub_id' => '1',
        ]);
        DB::table('categories')->insert([
            'cat_name' => 'Dell văn phòng',
            'sub_id' => '2',
        ]);
        DB::table('categories')->insert([
            'cat_name' => 'Dell WorkStation',
            'sub_id' => '3',
        ]);
        DB::table('categories')->insert([
            'cat_name' => 'Dell Developer',
            'sub_id' => '4',
        ]);
    }
}
