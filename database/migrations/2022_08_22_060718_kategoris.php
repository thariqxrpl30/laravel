<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kategoris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id('idkategori');
            $table->string('kategori');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
        Schema::drop('kategoris');
    }
}
