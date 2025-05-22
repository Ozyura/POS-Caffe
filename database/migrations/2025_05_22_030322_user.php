<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user', 30);
            $table->string('username', 10)->unique();
            $table->string('password', 100);
            $table->string('jabatan', 10);
            $table->text('alamat');  // gunakan text
            $table->string('tlp', 15);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
