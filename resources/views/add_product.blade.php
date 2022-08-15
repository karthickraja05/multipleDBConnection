@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Product</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ url('/add_product') }}?database={{ request()->database }}" method="POST">
                        @csrf
                        Product Name:
                        <input type="text" name="name" required="true" maxlength="30"><br/><br/>
                        Price: 
                        <input type="number" name="price" required="true"><br/><br/>
                        Category Type:
                        <select name="category[]" id="category" required="true" multiple>
                            <!-- <option selected>Select Category</option> -->
                            @foreach($categories as $key => $category)
                            @if($loop->first)
                            <option value="{{ $key }}" selected>{{ $category }}</option>
                            @else
                            <option value="{{ $key }}">{{ $category }}</option>
                            @endif
                            @endforeach
                        </select>
                        <br/><br/>
                        <input type="submit" name="submit" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
