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
            $table -> string('career_image');
            $table -> string('career_date');
            $table -> string('career_detail');
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
