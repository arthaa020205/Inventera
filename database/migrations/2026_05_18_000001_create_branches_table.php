<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tabel cabang mini-market Jayusman Retail.
     */
    public function up(): void
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name');                          // Nama cabang, mis. "Jakarta HQ"
            $table->string('code', 10)->unique();            // Kode cabang, mis. "JKT-01"
            $table->string('city');                          // Kota
            $table->text('address')->nullable();             // Alamat lengkap
            $table->string('phone', 20)->nullable();
            $table->string('manager_name')->nullable();      // Nama kepala cabang
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
