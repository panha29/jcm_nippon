<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CareerMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career',function (Blueprint $table){
            $table -> id();
            $table -> string('career_title');
            $table -> string('career_position');
            $table -> string('career_image')->nullable();
            $table -> string('career_location')->nullable();
            $table -> string('career_date');
            $table -> string('career_detail')->nullable();
            $table -> string('career_gender')->nullable();
            $table -> string('career_hiring')->nullable();
            $table -> string('career_report_to')->nullable();
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
        Schema::dropIfExists('career');
    }
}
