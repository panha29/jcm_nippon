<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomerDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('customer_detail')){
            Schema::create('customer_detail', function (Blueprint $table) {
                $table->id();
                $table->string('customer_name');
                $table->string('customer_phone');
                $table->string('customer_shipto')->nullable();
                $table->string('customer_arrivelocation')->nullable();
                $table->string('customer_address')->nullable();
                $table->timestamps();
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
        Schema::dropIfExists('customer_detail');

    }
}
