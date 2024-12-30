<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('barang', function (Blueprint $table) {
        $table->integer('harga')->default(0)->change();
    });
}

public function down()
{
    Schema::table('barang', function (Blueprint $table) {
        $table->integer('harga')->default(null)->change();
    });
}
};
