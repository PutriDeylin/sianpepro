<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Order::create([
            'product_id' => 1,
            'harga' => 5000000,
            'user_id' => 1,
            'tanggal_order' => '2024-06-06',
            'status_order' => 1,
        ]);
        \App\Models\Order::create([
            'product_id' => 2,
            'harga' => 5000000,
            'user_id' => 2,
            'tanggal_order' => '2024-06-06',
            'status_order' => 1,
        ]);
    }
}
