<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministratorTable extends Migration
{
    public function up()
    {
        Schema::create('administrator', function (Blueprint $table) {
            $table->string('administrator_id',20)->primary();
            $table->string('administrator_password');
            $table->integer('administrator_authority');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('administrator');
    }
}
