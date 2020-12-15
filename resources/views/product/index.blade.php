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
            <h4 class="my-2">FILTER</h4>
            @php
            $categoryx = DB::table('categories')->where('name', 'Brands')->get();
            @endphp
            <div class="dropdown my-2 w-100">
                <button class="btn btn-primary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Search By Brand
                </button>
                <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                    @foreach ($categoryx as $c)
                        @php
                        $inr = DB::table('categories')->where('parent_id', $c->id)->get();
                        @endphp
                        @foreach ($inr as $item)
                            <a href="{{ route('products.index', ['category_id' => $item->id]) }}" class="dropdown-item"
                                style="text-decoration: none;">{{ $item->name }}</a>
                        @endforeach
                    @endforeach
                </div>
            </div>
            <div class="dropdown my-2 w-100">
                <button class="btn btn-primary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Search By Size
                </button>
                <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                     
                    @php
                        $it = DB::table('product_attributes')->groupBy('size')->get();
                        
                    @endphp
                        
                        @if ($it->count() > 0)
                            @foreach ($it as $attr)
                                <a href="{{ route('prod.attr', ['id' => $attr->id]) }}" class="dropdown-item"
                                    style="text-decoration: none;">{{ $attr->size}}</a>
                            @endforeach
                        @endif
                </div>
            </div>
            <div class="dropdown my-2 w-100">
                <button class="btn btn-primary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Search By Price
                </button>
                <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                    @php
                        $it = DB::table('product_attributes')->groupBy('price')->get();
                        
                    @endphp
                        
                        @if ($it->count() > 0)
                            @foreach ($it as $attr)
                                <a href="{{ route('prod.attr', ['id' => $attr->id]) }}" class="dropdown-item"
                                    style="text-decoration: none;">{{ $attr->price}}</a>
                            @endforeach
                        @endif
                </div>
            </div>
            <div class="dropdown my-2 w-100">
                <button class="btn btn-primary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Search By Color
                </button>
                <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                    @php
                        $it = DB::table('product_attributes')->groupBy('color')->get();
                        
                    @endphp
                        
                        @if ($it->count() > 0)
                            @foreach ($it as $attr)
                                <a href="{{ route('prod.attr', ['id' => $attr->id]) }}" class="dropdown-item"
                                    style="text-decoration: none;">{{ $attr->color}}</a>
                            @endforeach
                        @endif
                </div>
            </div>
        </div>
        <div class="products-info px-3">
            <div class="cat-info">
                <h2>{{ $categoryName }}</h2>

                @if ($category)
                    <div class="my-3 des">{!! $category->description !!}</div>
                @endif
                {{-- @if ($cat[0]->description)
                    <p class="my-3">{{ $cat[0]->description }}</p>
                @endif --}}
            </div>
            <div class="products my-2">
                @foreach ($products as $product)
                    @include('product.single_product')
                @endforeach
            </div>
        </div>
    </div>

@endsection
