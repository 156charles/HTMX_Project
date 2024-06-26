<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => 'Milk',
                'description' => 'A white liquid produced by the mammary glands of female mammals for feeding their young beginning immediately after birth.',
                'img' => 'https://cdn.britannica.com/77/200377-050-4326767F/milk-splashing-glass.jpg',
                'price' => 20,
                'quantity' => 10
            ],
            [
                'name' => 'Acer',
                'description' => 'Acer Inc (Acer) is global information and communications technology (ICT) company that develops, designs, markets, and exports IT products. ',
                'img' => 'https://m.media-amazon.com/images/I/71RtdZ+xi4L._AC_SL1500_.jpg',
                'price' => 50000,
                'quantity' => 10
            ],
            
            [
                'name' => 'Acer',
                'description' => 'Acer Inc (Acer) is global information and communications technology (ICT) company that develops, designs, markets, and exports IT products. ',
                'img' => 'https://m.media-amazon.com/images/I/71RtdZ+xi4L._AC_SL1500_.jpg',
                'price' => 50000,
                'quantity' => 10
            ],
            
            [
                'name' => 'Acer',
                'description' => 'Acer Inc (Acer) is global information and communications technology (ICT) company that develops, designs, markets, and exports IT products. ',
                'img' => 'https://m.media-amazon.com/images/I/71RtdZ+xi4L._AC_SL1500_.jpg',
                'price' => 50000,
                'quantity' => 10
            ]
            
        ];

        foreach($product as $product){
            Product::factory()->create($product);
        }
    }
}
