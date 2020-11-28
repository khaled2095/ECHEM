<div class="product-card">

    @if (!empty($product['cover_img']))
        <img src="{{ asset('storage/' . $product['cover_img']) }}" alt="{{ $product['name'] }}">
    @else
        <div class="bg-dark w-100" style="height: 350px"></div>
    @endif
    <div class="overlay">
        <a href="{{ route('prod.single', $product['id']) }}" class="btn btn-secondary"><i
                data-feather="arrow-right"></i></a>
        <a href="{{ route('cart.add', $product['id']) }}" class="btn btn-secondary cart"><i
                data-feather="shopping-cart"></i></a>
        <form action="{{ route('wishlists.store') }}" method="post">
            @csrf
            <input type="hidden" name="pid" value="{{ $product['id'] }}" />
            <button type="submit" class="btn btn-secondary"><i data-feather='heart'></i></button>
        </form>
    </div>
    <div class="content">
        <h5 class="text-center my-2">{{ $product['name'] }}</h5>
        @php
        $total = 0;
        $review = DB::table('reviews')->where('product_id', $product['id'])->get();
        if(!empty($review)){
        foreach ($review as $r) {
        # code...
        $total = $total + $r->star;
        }
        }
        if($total !== 0){
        $total = $total / $review->count();
        }
        @endphp
        <div class="star">
            @if ($total == 0)
                <div class="pl-3 my-3 ">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
            @endif
            @if ($total == 1)
                <div class="pl-3 my-3 ">
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <p class="badge badge-primary my-2 mx-2">{{ $review->count() }}</p>
                </div>
            @endif
            @if ($total == 2)
                <div class="pl-3 my-3 ">
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <p class="badge badge-primary my-2 mx-2">{{ $review->count() }}</p>
                </div>
            @endif
            @if ($total == 3)
                <div class="pl-3 my-3 ">
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <p class="badge badge-primary my-2 mx-2">{{ $review->count() }}</p>
                </div>
            @endif
            @if ($total == 4)
                <div class="pl-3 my-3 ">
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star"></i>
                    <p class="badge badge-primary my-2 mx-2">{{ $review->count() }}</p>
                </div>
            @endif
            @if ($total == 5)
                <div class="pl-3 my-3 ">
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow"></i>
                    <p class="badge badge-primary">{{ $review->count() }}</p>
                </div>

            @endif
        </div>
        <h5 class="text-center my-2">BDT {{ $product['price'] }} /-</h5>
    </div>
</div>




{{-- <div class="card product-card p-3">
    <div class="img">
        <a href="{{ route('prod.single', ['prodId' => $product->id]) }}">
            <img src="{{ asset('storage/' . $product->cover_img) }}" alt="{{ $product['name'] }}">
        </a>
    </div>
    <div class="body px-3 py-3">
        <small class="mt-1 badge badge-danger">Featured</small>
        <h2 class="name mb-3">{{ $product->name }} </h2>

        <p class="price mt-3">Get @ BDT {{ $product->price }}/-</p>
        <p class="price mt-2">GET Back {{ $product->cash_back_percent }}%</p>
    </div>
    <div class="btns">
        <form action="{{ route('wishlists.store') }}" method="post">
            @csrf
            <input type="hidden" name="pid" value="{{ $product->id }}" />
            <button type="submit" class="btn btn-secondary"><i data-feather='heart'></i></button>
        </form>
        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-secondary cart"><i
                data-feather="shopping-cart"></i></a>
    </div>
</div> --}}
{{-- <div class="product-card">
    <div class="card">
        <img class="card-img-top" src="{{ asset('product.png') }}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">{{ $product->name }}</h4>


            <p class="card-text">{{ $product->description }}</p>
            <h3 class="card-text">$ {{ $product->price }}</h3>

        </div>
        <div class="card-body">
            <a href="{{ route('cart.add', $product->id) }}" class="card-link">Add to Cart</a>

            <form action="{{ route('wishlists.store') }}" method="post">
                @csrf
                <input type="hidden" name="pid" value="{{ $product->id }}" />
                <button type="submit" class="btn btn-primary">Wishlist</button>

            </form>

        </div>
    </div>
</div>
--}}

{{-- <a href="{{ route('wishlists.store') }}" class="card-link">
    wishlist
</a> --}}
