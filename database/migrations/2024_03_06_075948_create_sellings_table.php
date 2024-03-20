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
        Schema::create('sellings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Customer_Id');
            $table->bigInteger('Cashier_Id');
            $table->date('Date_Sell');
            $table->enum('Selling_Status',['delivery','not_delivery'])->default('not_delivery');
            $table->Integer('Grand_Total');
            $table->timeStamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellings');
    }
};
