<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('prd_id');
            $table->unsignedInteger('cat_id');
            $table->string('prd_name');
            $table->string('prd_cpu');
            $table->string('prd_ram');
            $table->string('prd_hard_drive');
            $table->string('prd_screen');
            $table->string('prd_vga');
            $table->string('prd_service_tag');
            $table->string('prd_image');
            $table->string('prd_description');
            $table->integer('prd_instock');
            $table->integer('prd_sell_quantity');
            $table->integer('prd_price');
            $table->integer('prd_retail_price');
            $table->string('prd_status');
            $table->integer('prd_view_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
