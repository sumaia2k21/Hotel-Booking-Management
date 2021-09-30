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
            $table->foreignId('catagory_id');
            $table->string('room_name');
            $table->string('room_number')->unique();
            $table->string('max_adult');
            $table->string('max_child');
            $table->string('room_description');
            $table->string('no_of_bed');
            $table->string('image');
             $table->string('price');
             $table->string('status')->nullable();

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
