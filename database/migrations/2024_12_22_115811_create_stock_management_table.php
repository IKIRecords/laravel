<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockManagementTable extends Migration
{
    public function up()
{
    Schema::create('stock_management', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('product_id');
        $table->enum('manajemen', ['Makanan', 'Minuman']);  // Menggunakan ENUM untuk membatasi nilai
        $table->integer('jumlah_stok');
        $table->timestamp('date');
        $table->timestamps();

        $table->foreign('product_id')->references('id')->on('barang')->onDelete('cascade');
    });
}



    public function down()
    {
        Schema::dropIfExists('stock_management');
    }
}
