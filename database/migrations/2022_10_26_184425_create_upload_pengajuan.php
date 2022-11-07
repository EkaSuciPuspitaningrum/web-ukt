<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_pengajuan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->unsignedBigInteger('nim_berkas');
            $table->string('kelas');
            $table->string('jurusan');
            $table->string('prodi');
            $table->string('alamat');
            $table->string('kota');
            $table->unsignedBigInteger('kodepos');
            $table->string('ayah');
            $table->string('kerja_ayah');
            $table->unsignedBigInteger('telp_ayah');
            $table->string('ibu');
            $table->string('kerja_ibu');
            $table->unsignedBigInteger('telp_ibu');
            $table->string('berkas');
            $table->string('foto');
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
        Schema::dropIfExists('upload_pengajuan');
    }
};
