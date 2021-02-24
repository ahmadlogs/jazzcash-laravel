<?php

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
		DB::table('product')->insert([
			'name' => 'Mens Shoes',
			'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",
			'image' => 'images/1.jpg',
			'price' => '10.00',
			'status' => '1',
		]);
		
		DB::table('product')->insert([
			'name' => 'Ladies Dress',
			'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",
			'image' => 'images/2.jpg',
			'price' => '20.00',
			'status' => '1',
		]);
		
		DB::table('product')->insert([
			'name' => 'Drone 360',
			'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",
			'image' => 'images/3.jpg',
			'price' => '30.00',
			'status' => '1',
		]);
		
		DB::table('product')->insert([
			'name' => 'Power Laptop',
			'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",
			'image' => 'images/4.jpg',
			'price' => '40.00',
			'status' => '1',
		]);
    }
}
