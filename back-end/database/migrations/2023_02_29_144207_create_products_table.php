<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->references('id')->on('brands');
            $table->foreignId('category_id')->references('id')->on('categories');
          //  $table->foreignId('subCat_id')->references('id')->on('sub_categories');

            $table->string('productName');
            $table->string('pro_image1');
            $table->string('pro_image2');
            $table->integer('status');
            $table->longtext('variations');
            $table->string('description');
            $table->boolean('most_recent');
            $table->float('offer');
            $table->float('price');
            $table->float('avg_price');

         //$table->foreignId('inventory_id')->constrained('inventories');

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
};
