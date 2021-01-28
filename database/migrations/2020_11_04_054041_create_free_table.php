<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeTable extends Migration
{
    public function up()
    {
        Schema::create('frees', function (Blueprint $table) {
            $table->string('user_id',20)->primary();
            $table->integer('seiral_number');
            $table->integer('free_line');
            $table->date('free_days');
            $table->string('free_photo');
            $table->geometry('free_location_infomation');
            $table->string('free_category_code',4)->unique();
            $table->text('free_comment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('frees');
    }
}
