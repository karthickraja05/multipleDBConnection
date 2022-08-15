<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Company2CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::connection('mysql3')->table('categories')->insert([
                    [
                    	'name' => 'Electric',
                    ],
                    [
                    	'name' => 'Men Things',
                    ],
                    [
                    	'name' => 'Kids School Kid',
                    ],
                    [
                    	'name' => 'Cloths',
                    ],
                ]);
    }
}
