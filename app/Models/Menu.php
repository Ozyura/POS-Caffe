<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id_menu';
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(KategoriMenu::class, 'id_kategori');
    }
}
