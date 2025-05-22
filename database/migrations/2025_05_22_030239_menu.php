<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
    {   
    Schema::create('menu', function (Blueprint $table) {
        $table->id('id_menu');
        $table->unsignedBigInteger('id_kategori');
        $table->string('nama_menu', 100);
        $table->enum('jenis_menu', ['makanan', 'minuman']);
        $table->double('harga_menu');
        $table->tinyText('keterangan_menu')->nullable();
        $table->string('gambar', 50)->nullable();
        $table->timestamps();

        $table->foreign('id_kategori')->references('id_kategori')->on('kategori_menu');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
