<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function getCategoryNameAttribute(){
    	$category_ids = explode(',', $this->category);
    	$result = [];
    	$connection = new Category;
    	$connection->setConnection($this->connection);
    	foreach ($category_ids as $category_id) {
    		$data = $connection->find($category_id); 
    		$result[] = $data->name;
    	}
    	return implode(',', $result);
    }



}
