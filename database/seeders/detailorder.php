<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class detailorder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\DetailOrder::create([
            'order_id' => 1,
            'product_id' => 1,
            'user_id' => 9,
            'harga' => 5000,
            'jumlah' => 2,
            'charge' => 150000,
            'total_harga' => 160000,
        ]);
        \App\Models\DetailOrder::create([
            'order_id' => 2,
            'product_id' => 2,
            'user_id' => 9,
            'harga' => 5000,
            'jumlah' => 80,
            'charge' => 100000,
            'total_harga' => 4100000000,
        ]);
    }
}
