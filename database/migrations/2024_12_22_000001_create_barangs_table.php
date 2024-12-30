<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->varchar('nama')->default('Default Nama'); // Set default value during creation
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 10, 2);
            $table->integer('stok');
            $table->varchar('category_id');
            $table->enum('manajemen', ['Makanan', 'Minuman']);
            $table->foreign('category_id')->references('nama')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('barang');
    }
}
