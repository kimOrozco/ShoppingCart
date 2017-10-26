<?php

use App\Product;
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
        Product::insert([
        	'product_name' => 'Pastel Centerpiece',
        	'image_path' => '12-S4p.jpg',
        	'price' => 200,
        ]);

        Product::insert([
        	'product_name' => 'Red-Blue Flower Bouquet',
        	'image_path' => 'EXQUISITE-7.jpg',
        	'price' => 200,
        ]);
         Product::insert([
            'product_name' => 'Colorful Flower Bouquet',
            'image_path' => 'colorful_bouquet_arrangement.jpg',
            'price' => 200,
        ]);
        Product::insert([
            'product_name' => 'Red Flower Bouquet',
            'image_path' => 'Pastel-Centerpiece-2T.jpg',
            'price' => 200,
        ]);
        
    }
}
