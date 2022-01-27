<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrysTable extends Migration
{
    public function up()
    {
        Schema::create('entrys', function (Blueprint $table) {
            $table->id();
            $table->string('owner');
            $table->string('gambar_koi');
            $table->foreignId('id_varietas')->constrained('varietass');
            $table->foreignId('id_kategori')->constrained('kategoris');
            $table->foreignId('id_event')->constrained('events');
            $table->foreignId('id_kota')->constrained('kotas');
            $table->foreignId('id_handler')->constrained('handlers');
            $table->text('keterangan_tambahan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entrys');
    }
}
