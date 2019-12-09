<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('client_id');
            $table->decimal('left_eye_power')->nullable();
            $table->decimal('right_eye_power')->nullable();
            $table->string('receipent_name');
            $table->string('receipent_contact');
            $table->string('receipent_email');
            $table->string('shipping_address');
            $table->integer('qty');
            $table->decimal('total_amount');
            $table->integer('status');
            $table->string('shipping_method');
            $table->string('payment_method');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
