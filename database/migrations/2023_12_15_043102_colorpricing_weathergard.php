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
        Schema::create('colorprice_weathergard',function (Blueprint $table){
            $table -> id();
            $table -> string('color_name');
            $table -> string('color_tag')->nullable();
            $table -> string('color_image')->nullable();
            $table -> string('color_1l')->nullable();
            $table -> string('color_5l')->nullable();
            $table -> string('color_15l')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colorprice_weathergard');
    }
};
