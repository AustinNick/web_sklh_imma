<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbcontact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbcontact', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nama');
            $table->char('email');
            $table->char('hp', 20);
            $table->text('pesan');
            $table->enum('status', ['waiting', 'reply', 'respon']);
            $table->rememberToken();
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
        //
    }
}
