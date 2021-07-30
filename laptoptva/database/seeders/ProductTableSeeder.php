<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'cat_id' => '1',
            'prd_name' => 'Dell XPS 13 9300 (2020)',
            'prd_cpu' => 'Core i5 1035G1',
            'prd_ram' => '8GB LPDDR4',
            'prd_hard_drive' => 'M.2 256GB',
            'prd_screen' => '13.4 inches FHD+',
            'prd_vga' => 'Intel® UHD Graphics',
            'prd_service_tag' => 'AA123',
            'prd_image' => 'aa.jpg',
            'prd_description' => 'Hihi',
            'prd_instock' => '4',
            'prd_sell_quantity' => '2',
            'prd_price' => '21000000',
            'prd_retail_price' => '23000000',
            'prd_status' => 'new',
            'prd_view_count' => '0',
        ]);
        DB::table('products')->insert([
            'cat_id' => '2',
            'prd_name' => 'Laptop DELL XPS 13 7390 2 in 1',
            'prd_cpu' => 'Intel® Core ™ i5-1035G1 thế hệ thứ 10',
            'prd_ram' => '8GB DDR4 2666MHz',
            'prd_hard_drive' => 'M.2 256GB PCIe NVMe Class 35',
            'prd_screen' => '13.3 Full HD (1920 x 1080) Touch',
            'prd_vga' => 'Intel® Integrated UHD Graphics',
            'prd_service_tag' => 'AA1234',
            'prd_image' => 'aa.jpg',
            'prd_description' => 'Hihi',
            'prd_instock' => '4',
            'prd_sell_quantity' => '2',
            'prd_price' => '21000000',
            'prd_retail_price' => '23000000',
            'prd_status' => 'new',
            'prd_view_count' => '0',
        ]);
        DB::table('products')->insert([
            'cat_id' => '3',
            'prd_name' => 'DELL XPS 15 7590 – I5 9300H ',
            'prd_cpu' => 'Core i5 1035G1',
            'prd_ram' => '8GB LPDDR4',
            'prd_hard_drive' => 'M.2 256GB',
            'prd_screen' => '13.4 inches FHD+',
            'prd_vga' => 'Intel® UHD Graphics',
            'prd_service_tag' => 'AA123',
            'prd_image' => 'aa.jpg',
            'prd_description' => 'Hihi',
            'prd_instock' => '4',
            'prd_sell_quantity' => '2',
            'prd_price' => '21000000',
            'prd_retail_price' => '23000000',
            'prd_status' => 'new',
            'prd_view_count' => '0',
        ]);
        DB::table('products')->insert([
            'cat_id' => '4',
            'prd_name' => 'Laptop Cũ Dell Latitude E5440',
            'prd_cpu' => 'Core i5 1035G1',
            'prd_ram' => '8GB LPDDR4',
            'prd_hard_drive' => 'M.2 256GB',
            'prd_screen' => '13.4 inches FHD+',
            'prd_vga' => 'Intel® UHD Graphics',
            'prd_service_tag' => 'AA123',
            'prd_image' => 'aa.jpg',
            'prd_description' => 'Hihi',
            'prd_instock' => '4',
            'prd_sell_quantity' => '2',
            'prd_price' => '21000000',
            'prd_retail_price' => '23000000',
            'prd_status' => 'new',
            'prd_view_count' => '0',
        ]);
    }
}
