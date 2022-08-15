<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function category_products(Request $request){
        $connectionModel = new Category();
        $connectionModel->setConnection($request->database);
        $categories = $connectionModel->pluck('name','id')->toArray();

        $connectionModel1 = new Product();
        $connectionModel1->setConnection($request->database);
        $products = $connectionModel1->get();

        return view('products_list',compact('categories','products'));
    }

    public function add_product(Request $request){
        if($request->method() == 'GET'){
            $connectionModel = new Category();
            $connectionModel->setConnection($request->database);
            $categories = $connectionModel->pluck('name','id')->toArray();

            return view('add_product',compact('categories'));
        }else{

            $connectionModel1 = new Product();
            $connectionModel1->setConnection($request->database);

            $connectionModel1->name = $request->name;
            $connectionModel1->price = $request->price;
            $connectionModel1->category = implode(',', $request->category);
            $connectionModel1->save();

            return redirect('category_products?database='.$request->database)->with('status','Product Added Successfully');
        }
    }

}
