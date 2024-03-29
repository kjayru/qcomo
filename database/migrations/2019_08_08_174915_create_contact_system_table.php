<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_system', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('sms');
            $table->string('whatsapp');
            $table->string('direccion');
            $table->string('facebook');
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
        Schema::dropIfExists('contact_system');
    }
}
