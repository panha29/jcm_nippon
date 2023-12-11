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
        Schema::create('product_pricing',function (Blueprint $table){
            $table -> id();
            $table -> string('product_pricing_name');
            $table -> string('product_pricing_price');
            $table -> string('product_pricing_category');
            $table -> string('product_pricing_quantity');
            $table -> string('product_pricing_batch');
            $table -> string('product_pricing_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_pricing');

    }
};


