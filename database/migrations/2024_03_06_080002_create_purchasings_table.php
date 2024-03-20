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
        Schema::create('purchasings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Vendor_Id');
            $table->bigInteger('Admin_Id');
            $table->date('Date_Purchase');
            $table->enum('Purchase_Status',['delivery','not_delivery'])->default('not_delivery');
            $table->integer('Grand_Total');
            $table->timeStamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchasings');
    }
};
