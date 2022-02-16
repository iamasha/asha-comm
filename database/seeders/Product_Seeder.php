<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            ['name'=>'Beans',
            'price'=>'2',
            'description'=>'Very nutritious beans to the body',
            'category'=>'Legumes',
            'gallery'=>'public/images/beans.jpg'],

            ['name'=>'Rice',
            'price'=>'3',
            'description'=>'Pure white rice clean and healthy',
            'category'=>'Cerals',
            'gallery'=>'public/images/rice.png'],

            ['name'=>'Vegetables',
            'price'=>'1',
            'description'=>'Healthy vegetables for a healthy body and mind',
            'category'=>'veges',
            'gallery'=>'public/images/veges.jpg'],

            ['name'=>'Apples',
            'price'=>'5',
            'description'=>'An apple a day saves nine',
            'category'=>'Frits',
            'gallery'=>'public/images/apples.jpg'],
        ]);
    }
}
