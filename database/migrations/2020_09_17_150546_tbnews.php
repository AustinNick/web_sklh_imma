<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbnews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbnews', function (Blueprint $table) {
            $table->increments('id', 10);
            $table->char('header');
            $table->char('subtitle');
            $table->text('deskripsi');
            $table->char('created_by');
            $table->char('gambar', 200);
            $table->enum('kategori', ['news', 'prestasi']);
            $table->rememberToken();
            $table->timestamps();
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
