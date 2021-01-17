<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'name' => 'Temaki',
            'imagePath' => '/img/temaki.jpg',
            'price' => 2.90,
            'quantity' => 15
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Sashimi',
            'imagePath' => '/img/sashimi.jpg',
            'price' => 3.90,
            'quantity' => 10
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Agemono',
            'imagePath' => '/img/agemono.jpg',
            'price' => 4.90,
            'quantity' => 20
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Yakimono',
            'imagePath' => '/img/yakimono.jpg',
            'price' => 1.90,
            'quantity' => 30
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Maki',
            'imagePath' => '/img/Maki.jpg',
            'price' => 2.90,
            'quantity' => 5
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Spicy Tuna Roll',
            'imagePath' => '/img/spicytuna.jpg',
            'price' => 3.90,
            'quantity' => 25
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Uramaki',
            'imagePath' => '/img/uramaki.jpg',
            'price' => 1.90,
            'quantity' => 10
        ]);
        $product->save();
    }
}
