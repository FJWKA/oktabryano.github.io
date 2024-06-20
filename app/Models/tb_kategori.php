<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'tb_kategoris';

    public function pemasukan()
    {
        return $this->hasMany('App\Models\Pemasukan', 'kategori_id');
    }

    public function pengeluaran()
    {
        return $this->hasMany('App\Models\Pengeluaran', 'kategori_id');
    }
}