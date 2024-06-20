<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    protected $table = 'tb_pemasukans';

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'kategori_id');
    }
}
