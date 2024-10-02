<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dmasuk extends Model
{
    use HasFactory;
    protected $fillable = ['id_masuk','kode_masuk','kode_barang_beli','jumlah','subtotal'];
}
