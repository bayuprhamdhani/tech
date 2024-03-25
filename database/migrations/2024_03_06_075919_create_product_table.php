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
        Schema::create('Products', function (Blueprint $table) {
            $table->id();
            $table->string('Product_Name');
            $table->integer('Qty');
            $table->integer('Selling_Price');
            $table->integer('Buying_Price');
            $table->string('Product_Type_ID');
            $table->enum('Product_Status', ['Ready', 'Sold Out']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Products');
    }
};
