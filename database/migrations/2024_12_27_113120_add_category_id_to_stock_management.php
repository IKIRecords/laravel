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
        Schema::table('stock_management', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->after('product_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('stock_management', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
    
};
