<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_resi',
        'user_id',
        'product_id',
        'harga',
        'jumlah',
        'charge',
        'total_harga',
        'bayar',
        'sisa_bayar',
        'tanggal_transaksi',
        'tanggal_selesai',
        'bukti_bayar',
        'status_produksi',
        'status_transaksi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

   
}
