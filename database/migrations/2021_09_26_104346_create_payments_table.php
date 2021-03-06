<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('book_id');
            $table->foreignId('user_id');
            $table->integer('total_ammount');
            $table->integer('discount_price');
            $table->integer('pay_ammount');
            $table->string('payment_type');
            $table->string('transection')->nullable();
            $table->string('payment_date');
            $table->integer('due')->default(0);
            $table->string('payment_status')->default('unpaid');
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
        Schema::dropIfExists('payments');
    }
}
