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
        Schema::table('products', function(Blueprint $table) {
            $table->foreignId('category_ID')->constrained('categories');

        });
        Schema::table('employees', function(Blueprint $table) {
            $table->foreignId('department_ID')->constrained('departments');

        });

        Schema::table('carts', function(Blueprint $table) {
            $table->foreignId('user_ID')->constrained('users')->cascadeOnDelete();
            $table->foreignId('product_ID')->constrained('products')->cascadeOnDelete();
        });

        Schema::table('payments', function(Blueprint $table) {
            $table->foreignId('user_ID')->constrained('users');

        });

        Schema::table('invoices', function(Blueprint $table) {
            $table->foreignId('user_ID')->constrained('users');
            $table->foreignId('product_ID')->constrained('products');
        });

        Schema::table('suppliers', function(Blueprint $table) {
            $table->foreignId('product_ID')->constrained('products');

        });

        Schema::table('inventories', function(Blueprint $table) {
            $table->foreignId('product_ID')->constrained('products');
            $table->foreignId('supplier_ID')->constrained('suppliers');
            $table->foreignId('category_ID')->constrained('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_keys');
    }
};
