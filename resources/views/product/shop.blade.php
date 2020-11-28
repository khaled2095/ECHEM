@extends('layouts.app')


@section('extra_css')
    <style>
        .prod-category-page {
            width: 100%;
            display: grid;
            grid-template-columns: 250px auto;
        }

        .side-bar-filter {
            border-right: 2px solid rgba(1, 1, 1, .05);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;

        }

        .prods {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        @media (max-width: 768px) {
            .side-bar-filter {
                display: none;
            }

            .cat-info {
                flex-direction: column;
            }

            .prods {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 430px) {
            .cat-info {
                margin: 20px 0;
            }

            .prods {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        .des {
            width: 400px;
        }
       
        @media (max-width: 430px) {
            .des {
                width: 300px;
            }
        }

    </style>
@endsection

@section('content')

    <div class="prod-category-page">
        <div class="side-bar-filter px-3">
            @php
            $categoryx = DB::table('categories')->where('parent_id', null)->get();
            @endphp
            @foreach ($categoryx as $c)
                @php
                $inr = DB::table('categories')->where('parent_id', $c->id)->get();
                @endphp
                <h4 class="mt-3">{{ $c->name }}</h4>
                @foreach ($inr as $item)
                    <a href="{{ route('products.index', ['category_id' => $item->id]) }}" class="my-1"
                        style="text-decoration: none;">{{ $item->name }}</a>
                @endforeach
            @endforeach
        </div>
        <div class="products-info px-3">
            
            <div class="products my-2">
                @foreach ($products as $product)
                    @include('product.single_product')
                @endforeach
            </div>
        </div>
    </div>

@endsection
