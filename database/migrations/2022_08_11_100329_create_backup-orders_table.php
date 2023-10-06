<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackupOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('backup_order'))
        {
            Schema::create('backup_order', function (Blueprint $table) {
                $table->id();
                $table->softDeletes();
                $table->timestamps();
                $table->string('date');
                $table->string('issued_payment_via')->nullable();
                $table->string('issued_paid')->nullable();
                $table->string('issued_date')->nullable();
                $table->string('order_customer');
                $table->string('order_phone');
                $table->string('arrivelocation')->nullable();
                $table->string('deliverytime')->nullable();
                $table->string('shipto')->nullable();
                $table->string('attendto')->nullable();
                $table->string('address')->nullable();
                $table->string('issued_by')->nullable();
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
                $table->string('product8',25)->nullable();
                $table->string('product9',25)->nullable();
                $table->string('product10',25)->nullable();
                $table->string('product11',25)->nullable();
                $table->string('product12',25)->nullable();
                $table->string('product13',25)->nullable();
                $table->string('product14',25)->nullable();
                $table->string('product15',25)->nullable();
                $table->string('qtyproduct1',6)->nullable();
                $table->string('qtyproduct2',6)->nullable();
                $table->string('qtyproduct3',6)->nullable();
                $table->string('qtyproduct4',6)->nullable();
                $table->string('qtyproduct5',6)->nullable();
                $table->string('qtyproduct6',6)->nullable();
                $table->string('qtyproduct7',6)->nullable();
                $table->string('qtyproduct8',6)->nullable();
                $table->string('qtyproduct9',6)->nullable();
                $table->string('qtyproduct10',6)->nullable();
                $table->string('qtyproduct11',6)->nullable();
                $table->string('qtyproduct12',6)->nullable();
                $table->string('qtyproduct13',6)->nullable();
                $table->string('qtyproduct14',6)->nullable();
                $table->string('qtyproduct15',6)->nullable();
                $table->string('price_product1',6)->nullable();
                $table->string('price_product2',6)->nullable();
                $table->string('price_product3',6)->nullable();
                $table->string('price_product4',6)->nullable();
                $table->string('price_product5',6)->nullable();
                $table->string('price_product6',6)->nullable();
                $table->string('price_product7',6)->nullable();
                $table->string('price_product8',6)->nullable();
                $table->string('price_product9',6)->nullable();
                $table->string('price_product10',6)->nullable();
                $table->string('price_product11',6)->nullable();
                $table->string('price_product12',6)->nullable();
                $table->string('price_product13',6)->nullable();
                $table->string('price_product14',6)->nullable();
                $table->string('price_product15',6)->nullable();
                $table->string('pd_discount1',6)->nullable();
                $table->string('pd_discount2',6)->nullable();
                $table->string('pd_discount3',6)->nullable();
                $table->string('pd_discount4',6)->nullable();
                $table->string('pd_discount5',6)->nullable();
                $table->string('pd_discount6',6)->nullable();
                $table->string('pd_discount7',6)->nullable();
                $table->string('pd_discount8',6)->nullable();
                $table->string('pd_discount9',6)->nullable();
                $table->string('pd_discount10',6)->nullable();
                $table->string('pd_discount11',6)->nullable();
                $table->string('pd_discount12',6)->nullable();
                $table->string('pd_discount13',6)->nullable();
                $table->string('pd_discount14',6)->nullable();
                $table->string('pd_discount15',6)->nullable();
                $table->string('total_price1',6)->nullable();
                $table->string('total_price2',6)->nullable();
                $table->string('total_price3',6)->nullable();
                $table->string('total_price4',6)->nullable();
                $table->string('total_price5',6)->nullable();
                $table->string('total_price6',6)->nullable();
                $table->string('total_price7',6)->nullable();
                $table->string('total_price8',6)->nullable();
                $table->string('total_price9',6)->nullable();
                $table->string('total_price10',6)->nullable();
                $table->string('total_price11',6)->nullable();
                $table->string('total_price12',6)->nullable();
                $table->string('total_price13',6)->nullable();
                $table->string('total_price14',6)->nullable();
                $table->string('total_price15',6)->nullable();
                $table->text('discount')->nullable();
                $table->text('totalprice');
                $table->text('deposit')->nullable();
                $table->text('balance')->nullable();
                $table->text('image1')->nullable();
                $table->text('image2')->nullable();
                $table->text('image3')->nullable();
                $table->text('image4')->nullable();
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
        Schema::dropIfExists('backup-orders');
    }
}
