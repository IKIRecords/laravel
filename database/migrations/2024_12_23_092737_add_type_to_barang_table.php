<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('barang', function (Blueprint $table) {
            $table->enum('type', ['Makanan', 'Minuman'])->default('Makanan'); // Tambahkan kolom dengan enum
        });
    }

    public function down(): void
    {
        Schema::table('barang', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
