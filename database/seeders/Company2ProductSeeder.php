<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Company2ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::connection('mysql3')->table('products')->insert([
                    [
	                 	'name' => 'Watch', 
	                 	'price' => 100,
	                 	'category' => '1,2',
                	],
                	[
                	 	'name' => 'Pen', 
                	 	'price' => 120,
                	 	'category' => '3',
                	],
                	[
                	 	'name' => 'Pencil', 
                	 	'price' => 20,
                	 	'category' => '3',
                	],
                	[
                	 	'name' => 'Shirt', 
                	 	'price' => 250,
                	 	'category' => '4',
                	],
                ]);
    }
}
