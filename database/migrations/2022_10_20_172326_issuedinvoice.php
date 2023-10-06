<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Issuedinvoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('issuedinvoices'))

        Schema::create('issuedinvoices', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->timestamps();
            $table->string('issued_date');
            $table->string('issued_by');
            $table->string('issued_payment_via')->nullable();
            $table->string('issued_paid')->nullable();
            $table->string('date')->nullable();
            $table->string('order_customer')->nullable();
            $table->string('order_phone')->nullable();
            $table->string('arrivelocation')->nullable();
            $table->string('deliverytime')->nullable();
            $table->string('shipto')->nullable();
            $table->string('attendto')->nullable();
            $table->string('address')->nullable();
            $table->string('term')->nullable();
            $table->string('order_date')->nullable();
            $table->string('seller')->nullable();
            $table->string('invoice');
            $table->string('product1',25)->nullable();
            $table->string('product2',25)->nullable();
            $table->string('product3',25)->nullable();
            $table->string('product4',25)->nullable();
            $table->string('product5',25)->nullable();
            $table->string('product6',25)->nullable();
            $table->string('product7',25)->nullable();
            $table->string('qtyproduct1',25)->nullable();
            $table->string('qtyproduct2',25)->nullable();
            $table->string('qtyproduct3',25)->nullable();
            $table->string('qtyproduct4',25)->nullable();
            $table->string('qtyproduct5',25)->nullable();
            $table->string('qtyproduct6',25)->nullable();
            $table->string('qtyproduct7',25)->nullable();
            $table->string('price_product1',25)->nullable();
            $table->string('price_product2',25)->nullable();
            $table->string('price_product3',25)->nullable();
            $table->string('price_product4',25)->nullable();
            $table->string('price_product5',25)->nullable();
            $table->string('price_product6',25)->nullable();
            $table->string('price_product7',25)->nullable();
            $table->string('pd_discount1',25)->nullable();
            $table->string('pd_discount2',25)->nullable();
            $table->string('pd_discount3',25)->nullable();
            $table->string('pd_discount4',25)->nullable();
            $table->string('pd_discount5',25)->nullable();
            $table->string('pd_discount6',25)->nullable();
            $table->string('pd_discount7',25)->nullable();
            $table->string('total_price1',25)->nullable();
            $table->string('total_price2',25)->nullable();
            $table->string('total_price3',25)->nullable();
            $table->string('total_price4',25)->nullable();
            $table->string('total_price5',25)->nullable();
            $table->string('total_price6',25)->nullable();
            $table->string('total_price7',25)->nullable();
            $table->string('discount')->nullable();
            $table->string('totalprice');
            $table->string('deposit')->nullable();
            $table->string('balance')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issuedinvoices');
    }
}
