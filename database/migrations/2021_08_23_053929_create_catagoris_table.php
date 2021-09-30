<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatagorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catagoris', function (Blueprint $table) {
            $table->id();
            $table->string('catagory_title')->unique();
            // $table->string('max_adult')->nullable();
            // $table->string('max_child')->nullable();
            // $table->string('no_of_bed')->nullable();
            
            $table->string('image');
            $table->string('description');
            $table->string('price')->nullable();
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
        Schema::dropIfExists('catagoris');
    }
}
