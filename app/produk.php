<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $fillable = ['nama', 'keterangan', 'harga', 'jumlah'];
}
