<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $guarded = [];

    public function transaksiPenjualan()
    {
        return $this->hasMany(Transaksi::class, 'id_user');
    }
}
