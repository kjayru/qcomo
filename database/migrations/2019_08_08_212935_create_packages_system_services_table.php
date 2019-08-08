<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesSystemServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages_system_services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('system_service_id');
            $table->foreign('system_service_id')->references('id')->on('system_services'); 
            $table->unsignedInteger('package_id');
            $table->foreign('package_id')->references('id')->on('packages'); 
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
        Schema::dropIfExists('packages_system_services');
    }
}
