<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHandlersTable extends Migration
{
    public function up()
    {
        Schema::create('handlers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_handler');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('handlers');
    }
}