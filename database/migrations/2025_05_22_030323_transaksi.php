<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // pastikan engine InnoDB
            
            $table->date('tanggal');
            $table->unsignedBigInteger('id_user');
            $table->integer('table_number');
            $table->timestamps();

            // Asumsikan tabel users (plural)
            $table->foreign('id_user')->references('id')->on('user')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
