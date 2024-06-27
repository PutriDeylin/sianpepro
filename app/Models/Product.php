<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'foto_produk',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detail()
    {
        return $this->hasMany(DetailOrder::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
