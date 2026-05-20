<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tabel kategori produk.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');                          // mis. "Minuman", "Makanan Ringan"
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        /**
         * Tabel produk / inventaris.
         */
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->string('name');
            $table->string('sku', 50)->unique();             // Stock Keeping Unit
            $table->text('description')->nullable();
            $table->decimal('cost_price', 15, 2);            // Harga beli
            $table->decimal('selling_price', 15, 2);         // Harga jual
            $table->string('unit', 20)->default('pcs');      // pcs, kg, liter, dll.
            $table->string('barcode', 50)->nullable()->unique();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
    }
};
