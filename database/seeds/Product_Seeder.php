<?php

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
        DB::table('products')->insert([
            [
            	'name'=> 'samsung phone',
            	'price'=> '10000',
            	'category'=> 'smartphone',
            	'gallery'=> 'https://clipart.info/images/ccovers/1503608343smartphone%20samsung%20galaxy%20mobile%20png.png',
            	'description'=> 'This is a old smartpone and having old feature of android'
            ],
            [
            	'name'=> 'oppo phone',
            	'price'=> '6000',
            	'category'=> 'smartphone',
            	'gallery'=> 'https://cdn.chv.me/images/TlNvrbZH.jpg',
            	'description'=> 'This is a old smartpone and having old feature of oppo'
            ],
            [
            	'name'=> 'mi phone',
            	'price'=> '9000',
            	'category'=> 'smartphone',
            	'gallery'=> 'https://cdn.chv.me/images/TlNvrbZH.jpg',
            	'description'=> 'This is a old smartpone and having old feature of Mi redmi'
            ],
            [
            	'name'=> 'dell laptop',
            	'price'=> '10000',
            	'category'=> 'laptop',
            	'gallery'=> 'https://s.neofiliac.com/P/59/43/1611261308.jpg',
            	'description'=> 'This is a old laptop and feature of gaming alptop'
            ]
        ]);
    }
}
