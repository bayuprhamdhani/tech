<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_sellings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Id_Product');
            $table->string('Product_Name');
            $table->integer('Selling_Price');
            $table->integer('Qty');
            $table->integer('Sub_Total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_sellings');
    }
};
