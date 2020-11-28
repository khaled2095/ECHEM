@extends('layouts.app')

@section('content')

    <div class="products-shop my-2">
        @php
        $products = DB::table('products')->get();
        @endphp
        <div class="container">
            <div class="shop-search w-100 mb-3 flex-row align-items-center justify-content-between card rounded p-4">
                <h4>Search</h4>
                <form class="form-inline my-2 my-lg-0" action="{{ route('products.search') }}" method="GET">
                    <input class="form-control " type="text" placeholder="What are you looking for?" id='search'
                        name="query">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit" id='search-btn'>Search</button>
                </form>
            </div>

            <div class="products">

                @foreach ($products as $product)
                    @if (!empty($product->wholesale_id))
                        @include('product.single_product')
                    @endif
                @endforeach

            </div>

        </div>
    </div>

@endsection
