<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news',function (Blueprint $table){
            $table -> id();
            $table -> string('news_title');
            $table -> string('news_image')->nullable();
            $table -> string('news_date');
            $table -> string('news_detail')->nullable();
            $table -> string('news_important')->nullable();
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
        Schema::dropIfExists('news');
    }
}
