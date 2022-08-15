@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ url('/category_products') }}" method="GET">
                    <div class="container">
                        <div>
                            <span>Select Database: </span><br/>
                            <select name="database" class="custom-select" >
                                <!-- <option selected value="">Select</option> -->
                                <option value="mysql2">Company1</option>
                                <option value="mysql3">Company2</option>
                            </select>        
                        </div>
                        <br/>
                        <button class="btn btn-primary" type="submit">Get Record</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
