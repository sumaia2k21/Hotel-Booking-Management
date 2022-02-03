<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id');
            $table->foreignId('room_id')->nullable();
            $table->string('mobile_no');
            $table->string('email');
            $table->string('address');
            $table->string('from_date');
            $table->string('to_date');
            $table->string('total_ammount');
            $table->double('total_paid')->default(0);
            $table->string('discount')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('payment_status')->default('unpaid');
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
        Schema::dropIfExists('books');
    }
}
