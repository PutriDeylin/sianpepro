<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class transactions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\Transaction::create([
            'user_id' => 9,
            'no_resi' => "20240613054733",
            'product_id' => 1,
            'harga' => 5000,
            'jumlah' => 2,
            'charge' => 150000,
            'total_harga' => 160000,
            'bayar' => 160000,
            'sisa_bayar' => 0,
            'tanggal_transaksi' => '2024-06-13',
            'tanggal_selesai' => '2024-06-27',
            'bukti_bayar' => 'bukti_bayar.jpg',
            'status_produksi' => 'baru masuk',
            'status_transaksi' => 'Lunas',
        ]);
        \App\Models\Transaction::create([
            'user_id' => 9,
            'no_resi' => "20240613054733",
            'product_id' => 2,
            'harga' => 5000,
            'jumlah' => 80,
            'charge' => 100000,
            'total_harga' => 4100000000,
            'bayar' => 4100000000,
            'sisa_bayar' => 0,
            'tanggal_transaksi' => '2024-06-13',
            'tanggal_selesai' => '2024-06-27',
            'bukti_bayar' => 'bukti_bayar.jpg',
            'status_produksi' => 'baru masuk',
            'status_transaksi' => 'Lunas',
        ]);
    }
}
