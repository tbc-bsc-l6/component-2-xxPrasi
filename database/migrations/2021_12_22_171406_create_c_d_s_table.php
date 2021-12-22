<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_d_s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cd_title');
            $table->string('first_name');
            $table->string('band');
            $table->string('price');
            $table->string('playlength');
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
        Schema::dropIfExists('c_d_s');
    }
}
