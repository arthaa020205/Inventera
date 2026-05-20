<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tabel stok produk per cabang.
     * Memisahkan stok agar setiap cabang bisa memiliki jumlah stok berbeda.
     */
    public function up(): void
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->integer('stock')->default(0);            // Stok saat ini
            $table->integer('min_stock')->default(5);        // Batas minimum sebelum alert
            $table->date('last_restocked_at')->nullable();
            $table->timestamps();

            // Satu produk hanya punya satu baris stok per cabang
            $table->unique(['branch_id', 'product_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
