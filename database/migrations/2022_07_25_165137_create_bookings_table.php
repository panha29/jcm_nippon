<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('bookings')) {
            Schema::create('bookings', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('name');
                $table->string('title');
                $table->string('purpose');
                $table->string('order_date')->nullable();
                $table->string('arriving_date')->nullable();
                $table->string('testing_date')->nullable();
                $table->string('order_time')->nullable();
                $table->string('arriving_time')->nullable();
                $table->string('testing_time')->nullable();
                $table->string('traditionaldress');
                $table->string('moderndress');
                $table->string('items');
                $table->string('bookingimg1')->nullable();
                $table->string('bookingimg2')->nullable();
                $table->string('bookingimg3')->nullable();
                $table->string('bookingimg4')->nullable();
                $table->dateTime('start_date');
                $table->dateTime('end_date');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
