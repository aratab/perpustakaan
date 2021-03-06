<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = "detail_transaksi";
    public $timestamps = false;
    protected $primaryKey = 'idtransaksi';
    protected $fillable = [
        "idtransaksi", "idbuku", "tgl_kembali", "denda"
    ];
}
