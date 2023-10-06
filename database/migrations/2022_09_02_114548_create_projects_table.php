<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('projects'))
        {
            Schema::create('projects', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('head_tailor')->nullable();
                $table->string('tailor')->nullable();
                $table->string('project')->nullable();
                $table->string('project_den')->nullable();
                $table->string('project_de')->nullable();
                $table->string('pj_customer_name')->nullable();
                $table->string('quantity')->nullable();
                $table->string('start_date')->nullable();
                $table->string('process_start_date')->nullable();
                $table->string('testing_date')->nullable();
                $table->string('pickup_date')->nullable();
                $table->string('order_date')->nullable();
                $table->string('process_start_time')->nullable();
                $table->string('testing_time')->nullable();
                $table->string('pickup_time')->nullable();
                $table->string('order_time')->nullable();
                $table->string('end_date')->nullable();
                $table->string('delay_date')->nullable();
                $table->string('problem')->nullable();
                $table->string('note')->nullable();
                $table->string('progress')->nullable();
                $table->string('progress_den')->nullable();
                $table->string('progress_de')->nullable();
                $table->string('pj_image1')->nullable();
                $table->string('pj_image2')->nullable();
                $table->string('pj_image3')->nullable();
                $table->string('pj_image4')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
