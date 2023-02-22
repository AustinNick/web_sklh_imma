<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbusers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbuser', function (Blueprint $table) {
            $table->increments('nis', 7);
            $table->char('nisn', 15);
            $table->char('nama');
            $table->char('password');
            $table->char('kelas', 10);
            $table->char('jurusan', 10);
            $table->text('alamat');
            $table->char('telp', 20);
            $table->char('email', 50);
            $table->year('angkatan');
            $table->char('status', 10);
            $table->enum('aktif', ['Y', 'N']);
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
        Schema::dropIfExists('users');
    }
}
