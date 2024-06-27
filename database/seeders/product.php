<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::create([
            'nama_produk' => 'Baju',
            'deskripsi' => 'Baju berwarna merah',
            'harga' => 100000,
            'foto_produk' => 'baju.jpg',
        ]);
        \App\Models\Product::create([
            'nama_produk' => 'Celana',
            'deskripsi' => 'Celana berwarna biru',
            'harga' => 150000,
            'foto_produk' => 'celana.jpg',
        ]);
        \App\Models\Product::create([
            'nama_produk' => 'Topi',
            'deskripsi' => 'Topi berwarna hitam',
            'harga' => 50000,
            'foto_produk' => 'topi.jpg',
        ]);
    }
}
