<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('serial_number');
            $table->string('user_id',20);
            $table->string('store_name',20);
            $table->text('store_information');
            $table->text('store_introduction');
            $table->string('rural_code',4);
            $table->string('photo_pass',70)->nullable();
            $table->text('allergies')->nullable();
            $table->string('store_stype',5)->nullable();
            $table->string('area',4);
            $table->text('religion')->nullable();
            $table->string('url',100)->nullable();
            $table->string('street_address',30)->nullable();
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
        Schema::dropIfExists('information');
    }
}
