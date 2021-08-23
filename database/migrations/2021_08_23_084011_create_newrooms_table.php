<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newrooms', function (Blueprint $table) {
            $table->id();
            $table->string('catagory_title');
            $table->string('max_adult');
            $table->string('max_child');
            $table->string('room_description');
            $table->string('no_of_bed');
            $table->string('imaje');
            $table->string('Price');
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
        Schema::dropIfExists('newrooms');
    }
}
