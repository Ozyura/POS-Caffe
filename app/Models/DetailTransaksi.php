<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksi';
    protected $guarded = [];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_penjualan');
    }
}
