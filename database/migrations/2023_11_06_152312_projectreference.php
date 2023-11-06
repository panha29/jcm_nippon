<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Projectreference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_reference',function (Blueprint $table){
            $table -> id();
            $table -> string('project_reference_name');
            $table -> string('project_reference_startDate')->nullable();
            $table -> string('project_reference_endDate')->nullable();
            $table -> string('project_reference_area')->nullable();
            $table -> string('project_reference_exterior')->nullable();
            $table -> string('project_reference_interior')->nullable();
            $table -> string('project_reference_image1')->nullable();
            $table -> string('project_reference_image2')->nullable();
            $table -> string('project_reference_image3')->nullable();
            $table -> string('project_reference_image4')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_reference');
    }
}
