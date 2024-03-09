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
        Schema::create('staff_attendant',function (Blueprint $table){
            $table -> id();
            $table -> string('staff_name');
            $table -> string('staff_phone');
            $table -> string('staff_email');
            $table -> string('staff_checkin_date');
            $table -> string('staff_checkin_time');
            $table -> string('staff_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_attendant');
    }
};
