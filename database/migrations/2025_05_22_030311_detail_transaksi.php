<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->unsignedBigInteger('id_menu');
            $table->integer('jumlah_pj');
            $table->double('harga_pj');
            $table->double('total_harga_pj');
            $table->timestamps();
            $table->foreign('id_menu')->references('id_menu')->on('menu')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
