@extends('layouts.app')

@section('content')

    <x-small-banner />
    <x-large-banner />
    <div class="container-cus">
        @php
        $latest = array_chunk($recent, 4);
        $tops = array_chunk($top, 4);
        @endphp
        <h1 class="text-center mt-5">Recent Products</h1>
        <div id="line" class="my-1">
            <div></div>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide my-5" data-ride="carousel">
            <div class="carousel-inner">

                @foreach ($latest as $key => $item)
                    <div class="carousel-item w-100  {{ $key == 0 ? 'active' : '' }}" style="height: 530px;">
                        <div class="products">
                            @foreach ($item as $product)
                                @include('product.slider_prod')
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <h1 class="text-center mt-5">Top Products</h1>
        <div id="line" class="my-1">
            <div></div>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide my-5" data-ride="carousel">
            <div class="carousel-inner">

                @foreach ($tops as $key => $item)
                    <div class="carousel-item w-100  {{ $key == 0 ? 'active' : '' }}" style="height: 530px;">
                        <div class="products">
                            @foreach ($item as $product)
                                @include('product.slider_prod')
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <br>
        <br>
        <h1 class="text-center mt-5">Shop By Category</h1>
        <div id="line" class="my-3">
            <div></div>
        </div>
        <br>
        <br>
        <div>
            <div class="shop-by-cats">
                @php
                $cats = TCG\Voyager\Models\Category::where('parent_id', null)->get();
                @endphp
                @foreach ($cats as $Header)
                    <div class="card p-3 my-3">
                        @if ($Header->name === 'Supplies')
                            <div class="row align-items-center justify-content-center">
                                <img src="{{ asset('images/supplies.png') }}" alt="" width="80px" class="my-3">
                            </div>
                        @endif
                        @if ($Header->name === 'Supportive Products')
                            <div class="row align-items-center justify-content-center">
                                <img src="{{ asset('images/sup.png') }}" alt="" width="80px" class="my-3">
                            </div>
                        @endif
                        @if ($Header->name === 'Chemicals')
                            <div class="row align-items-center justify-content-center">
                                <img src="{{ asset('images/chem.png') }}" alt="" width="80px" class="my-3">
                            </div>
                        @endif
                        @if ($Header->name === 'Brands')
                            <div class="row align-items-center justify-content-center">
                                <img src="{{ asset('images/brand.png') }}" alt="" width="80px" class="my-3">
                            </div>
                        @endif
                        <a href="{{ route('products.index', ['category_id' => $Header->id]) }}"
                            class="h3 my-3 text-center text-primary" style="text-decoration: none;">{{ $Header->name }}</a>
                        @php
                        $catsInnr = TCG\Voyager\Models\Category::where('parent_id', $Header->id)->get();
                        @endphp
                        @foreach ($catsInnr as $item)
                            <a href="{{ route('products.index', ['category_id' => $item->id]) }}"
                                style="text-decoration: none;" class="h5 my-2 text-center">{{ $item->name }}</a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

        <div class="videos my-5">
            @php
            $videos = DB::table('videos')->latest()->take(4)->get();
            @endphp
            @foreach ($videos as $item)
                {!!$item->video!!}
            @endforeach
        </div>



        <h1 class="text-center mt-5">Recent Posts</h1>
        <div id="line" class="my-1">
            <div></div>
        </div>
        <div class="container-cus">
            <div class="container-cus">
                <div class="container-cus">
                    <p class="text-center my-3 ">
                        Find all of the Echem supplies, equipment and education. We are committed to
                        providing quality materials to help any screen printer bring their ideas to life easily and
                        affordably. Ryonet
                        provides silk screening products to meet the needs of screen printers, from large businesses to
                        hobbyists and
                        independent small business owners.
                    </p>
                </div>
            </div>
        </div>
        <div class="blogs">
            @php
            $post_arr = array_chunk($posts, 3);

            @endphp
            <div id="carouselExampleSlidesOnly" class="carousel slide my-5" data-ride="carousel">
                <div class="carousel-inner">

                    @foreach ($post_arr as $key => $item)
                        <div class="carousel-item w-100  {{ $key == 0 ? 'active' : '' }}" style="height: 530px;">
                            <div class="po">
                                @foreach ($item as $post)
                                    <div class="po-card">
                                        <img src="{{ asset('storage/' . $post->image) }}" style="border-radius: 15px;">
                                        <h4 class="my-4 text-center">{{ $post->title }}</h4>
                                        <a href="{{ route('post', $post->slug) }}" class="btn btn-primary w-100">Learn More</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
