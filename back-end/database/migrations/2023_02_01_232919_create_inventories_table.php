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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_ID')->constrained('products');
            $table->foreignId('supplier_ID')->constrained('suppliers');
            $table->string('productName');
            $table->string('productImage');
            $table->string('productSize');
            $table->string('productColor');
            $table->float('productCost');
            $table->integer('productQuantity');
            $table->foreignId('category_ID')->constrained('categories');
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
        Schema::dropIfExists('inventories');
    }
};
