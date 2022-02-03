<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('catagory_id');
            $table->string('room_name');
            $table->string('room_number')->unique();
            $table->string('max_adult')->nullable();
            $table->string('max_child')->nullable();
            $table->string('room_description');
            $table->string('no_of_bed')->nullable();
            $table->string('image');
             $table->string('price')->nullable();
             $table->string('discount_price')->nullable();
             $table->integer('discount')->default(0);
             $table->string('status')->default('available');
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
        Schema::dropIfExists('rooms');
    }
}
