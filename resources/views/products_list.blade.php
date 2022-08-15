@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Product List and Category
                </div>

                <div class="card-body">
                    <a href="{{ url('home') }}"><button class="btn btn-primary">Click to go DashBoard Page</button></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Categories</p>
                    <ul>
                        @foreach($categories as $key => $category)
                        <li>{{ $key }} - {{ $category }}</li>
                        @endforeach
                    </ul>

                    <p>Products</p>
                    <ul>
                        @foreach($products as $key => $product)
                        <li><b>ProductID:</b> {{ $product->id }} - <b>ProductName:</b> {{ $product->name }} - <b>Price:</b> {{ $product->price }} - <b>Categories:</b> {{ $product->category_name }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ url('/add_product') }}?database={{ request()->database }}"><button id="Add" class="btn btn-primary">Add Product</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
