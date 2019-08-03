<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->string("mercado_pago_invoice_id");
            $table->unsignedInteger('sale_id');
            $table->foreign('sale_id')->references('id')->on('sales'); 
            $table->string("mercado_pago_status");
            $table->string("mercado_pago_payment_method_id");
            $table->string("mercado_pago_payment_type_id");
            $table->string("mercado_pago_issuer_id");
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
        Schema::dropIfExists('order_payment');
    }
}
