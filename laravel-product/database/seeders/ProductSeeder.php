<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buat data produk
        Product::create([
            'name' => 'Produk 1',
            'description' => 'Deskripsi produk 1',
            'price' => 9.9,
            'stock' => 10
        ]);
        Product::create([
            'name' => 'Produk 2',
            'description' => 'Deskripsi produk 2',
            'price' => 2.5,
            'stock' => 5
        ]);
        Product::create([
            'name' => 'Produk 3',
            'description' => 'Deskripsi produk 3',
            'price' => 5.5,
            'stock' => 15
        ]);
    }
}
