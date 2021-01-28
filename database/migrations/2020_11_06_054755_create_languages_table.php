<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->string('language_code',4)->primary();
            $table->string('language',10);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
