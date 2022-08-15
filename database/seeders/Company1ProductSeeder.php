<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Company1ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::connection('mysql2')->table('products')->insert([
                    [
                    	'name' => 'Computer', 
                    	'price' => 100,
                    	'category' => '1,2',
                   	],
                   	[
                   	 	'name' => 'Book', 
                   	 	'price' => 120,
                   	 	'category' => '3',
                   	],
                   	[
                   	 	'name' => 'Pencil', 
                   	 	'price' => 20,
                   	 	'category' => '3',
                   	],
                   	[
                   	 	'name' => 'Pant', 
                   	 	'price' => 250,
                   	 	'category' => '4',
                   	],
                    
                ]);
    }
}
