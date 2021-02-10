<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="{{ asset('storage/' . $product->cover_img) }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    @livewireStyles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('extra_css')

</head>

<body>




    <div id="app">
        <x-nav-bar />


@php
    $reviews = DB::table('reviews')->where('product_id', $product->id)->get();
    $attr = DB::table('product_attributes')->where('product_id', $product->id)->get();

    $avg = 0;
    foreach ($reviews as $review) {
    # code...
    $avg = $avg + $review->star;
    }
    if ($avg !== 0){
    $avg = $avg / $reviews->count();
    }
    else{
    $avg = 0;
    }
    $star = round($avg);

    $cat = DB::table('product_categories')->where('product_id', $product->id)->get();

    @endphp
    <div class="product-single-page container my-3">

              <div class="media-content">
            @if ($product->cover_img)
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
              @foreach($img as $key => $im)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                  <img class="d-block w-100" src="{{ asset('storage/' . $im) }}" alt="First slide" style="max-width: 500px; max-height: 400px">
                </div>
              @endforeach
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            @else
                <div style="width: 100%; height: 500px; background: #000">
                </div>
            @endif
            <br>
            @if (!empty($product->product_video))
                {!! $product->product_video !!}
            @endif
        </div>
        <div class="prod-info">
            <h2>{{ $product->name }}</h2>
            <h4 id='prod-price'>Starting @ BDT
                @php
                $attr = array();
                if(!empty($product->product_attributes)){
                    array_push($attr, json_decode($product->product_attributes));
                }

                @endphp
                @if (!empty($attr[0]))
                    {{ $attr[0][0]->price }}
                @else
                    {{ $product->price }}
                @endif
                /-
            </h4>
            <br>
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr;">
                @foreach ($cat as $item)
                    @php
                    $cate = null;
                    if(!empty($item)){
                    $cate = DB::table('categories')->where('id', $item->category_id)->get();
                    }
                    @endphp
                    @foreach ($cate as $item)
                        <p class="badge badge-primary">{{ $item->name }}</p>
                    @endforeach
                @endforeach
            </div>

            @if ($product->cash_back_percent < 0)
            <h5>Cash Back 0 %</h5>
            @else
            <h5>Cash Back {{ $product->cash_back_percent }} %</h5>
            @endif
            <h5>Reward Point {{ $product->reward_point }}</h5>

            @php
                $shop = null;
                $wholesale = null;
                if(!empty($product->shop_id)){
                    $shop = DB::table('shops')->where('id', $product->shop_id)->first();
                }
                if(!empty($product->sholesale_id)){
                    $wholesale = DB::table('wholesales')->where('id', $product->shop_id)->first();
                }
            @endphp
            @if(!empty($shop))
                <p>From marchent{{$shop->name}}</p>
            @endif
            @if(!empty($wholesale))
                <p>From marchent{{$wholesale->name}}</p>
            @endif
            @if(empty($wholesale) && empty($shop))
                <p>From marchent @ECHEM</p>
            @endif

            @if ($star == 0)
                <div class="pl-3 my-3 row align-items-center">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
            @endif
            @if ($star == 1)
                <div class="pl-3 my-3 row align-items-center">
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <p class="badge badge-primary my-2 mx-2">{{ $reviews->count() }}</p>
                </div>
            @endif
            @if ($star == 2)
                <div class="pl-3 my-3 row align-items-center">
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <p class="badge badge-primary my-2 mx-2">{{ $reviews->count() }}</p>
                </div>
            @endif
            @if ($star == 3)
                <div class="pl-3 my-3 row align-items-center">
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <p class="badge badge-primary my-2 mx-2">{{ $reviews->count() }}</p>
                </div>
            @endif
            @if ($star == 4)
                <div class="pl-3 my-3 row align-items-center">
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star"></i>
                    <p class="badge badge-primary my-2 mx-2">{{ $reviews->count() }}</p>
                </div>
            @endif
            @if ($star == 5)
                <div class="pl-3 my-3 row align-items-center">
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow;"></i>
                    <i data-feather="star" style="fill: yellow"></i>
                    <p class="badge badge-primary">{{ $reviews->count() }}</p>
                </div>

            @endif

            <p class="my-2">{!! $product->description !!}</p>
            @php
                $file = null;
                if(strlen($product->product_pdf)>2){
                    $file = (json_decode($product->product_pdf));
                }
            @endphp
            @if(!empty($file))
            @foreach($file as $key => $f)
                <a class='btn btn-primary' href="{{asset('storage/'.$f->download_link)}}">Download PDF {{$key}}</a>
            @endforeach
            @endif
        </div>
        <div class="cart-info">
            <div class="attr">
                <form action="{{ route('cart.add', $product->id) }}">
                    <div class="form-group">
                        @if (!empty($attr[0]))
                            <select name="price" id="attr-select" class="form-control" onchange="val(this.value)"
                                value="{{ $attr[0][0]->price }}, {{ $attr[0][0]->size }}">
                                @foreach ($attr as $item)
                                    @foreach ($item as $i)
                                        <option value="{{ $i->price }}, {{ $i->size }}">{{ $i->size }}</option>
                                    @endforeach
                                @endforeach
                            </select>

                        @endif
                    </div>
                    <button type="submit" class="btn btn-danger w-100"><i data-feather="shopping-bag" class="mx-2"></i> Add
                        To Cart</button>
                </form>
                <form action="{{ route('wishlists.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="pid" value="{{ $product->id }}" />
                    <button type="submit" class="btn btn-primary w-100"><i class="mx-2" data-feather='heart'></i> add to
                        wishlist</button>
                </form>
            </div>
        </div>
    </div>

    <div class="my-5 container">
        <h2>Reviews</h2>
        @if ($star == 0)
            <div class="pl-3 my-3 row align-items-center">
                <i data-feather="star"></i>
                <i data-feather="star"></i>
                <i data-feather="star"></i>
                <i data-feather="star"></i>
                <i data-feather="star"></i>
            </div>
        @endif
        @if ($star == 1)
            <div class="pl-3 my-3 row align-items-center">
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star"></i>
                <i data-feather="star"></i>
                <i data-feather="star"></i>
                <i data-feather="star"></i>
                <p class="badge badge-primary my-2 mx-2">{{ $reviews->count() }}</p>
            </div>
        @endif
        @if ($star == 2)
            <div class="pl-3 my-3 row align-items-center">
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star"></i>
                <i data-feather="star"></i>
                <i data-feather="star"></i>
                <p class="badge badge-primary my-2 mx-2">{{ $reviews->count() }}</p>
            </div>
        @endif
        @if ($star == 3)
            <div class="pl-3 my-3 row align-items-center">
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star"></i>
                <i data-feather="star"></i>
                <p class="badge badge-primary my-2 mx-2">{{ $reviews->count() }}</p>
            </div>
        @endif
        @if ($star == 4)
            <div class="pl-3 my-3 row align-items-center">
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star"></i>
                <p class="badge badge-primary my-2 mx-2">{{ $reviews->count() }}</p>
            </div>
        @endif
        @if ($star == 5)
            <div class="pl-3 my-3 row align-items-center">
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star" style="fill: yellow;"></i>
                <i data-feather="star" style="fill: yellow"></i>
                <p class="badge badge-primary">{{ $reviews->count() }}</p>
            </div>

        @endif
        <button class="btn btn-primary my-2" data-toggle="modal" data-target="#exampleModal">Leave A Review</button>
        @if (!empty($product->shop_id))
            @php
            $shop_user = DB::table('shops')->where('id', $product->shop_id)->first();
            @endphp
            <form action="{{ route('init.msg', ['msg' => 'hello', 'to' => $shop_user->user_id]) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary ">Talk With Seller</button>
            </form>
        @endif
        @if (!empty($product->wholesale_id))
            @php
            $wholesale = DB::table('wholesales')->where('id', $product->wholesale_id)->first();
            @endphp
            <form action="{{ route('init.msg', ['msg' => 'hello', 'to' => $wholesale->id]) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary ">Talk With Seller</button>
            </form>
        @endif
        @if (empty($product->wholesale_id) && empty($product->shop_id))
            @php
            $user = DB::table('users')->where('role_id', 1)->first();
            @endphp
            <form action="{{ route('init.msg', ['msg' => 'hello', 'to' => $user->id]) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary ">Talk With Seller</button>
            </form>
        @endif
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <form action="{{ route('make-review', $product->id) }}">
                            <div class="from-group">
                                <fieldset class="rating">
                                    <div class="rating" id='rating'>
                                        <span><input type="radio" name="star" id="str5" value="5"><label
                                                for="str5"></label></span>
                                        <span><input type="radio" name="star" id="str4" value="4"><label
                                                for="str4"></label></span>
                                        <span><input type="radio" name="star" id="str3" value="3"><label
                                                for="str3"></label></span>
                                        <span><input type="radio" name="star" id="str2" value="2"><label
                                                for="str2"></label></span>
                                        <span><input type="radio" name="star" id="str1" value="1"><label
                                                for="str1"></label></span>
                                    </div>
                                </fieldset>
                            </div>
                            <textarea name="comment" id="" cols="7" rows="5" class="my-2 form-control"
                                placeholder="Comment"></textarea>
                            <button type="submit" class="w-100 btn btn-primary btn-sm">Review</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
        $pr = DB::table('related__products')->where('product_id', $product->id)->get();
        
        $prd = array();
        foreach($pr as $p){
            $pro = DB::table('products')->where('id', $p->related)->first();
            array_push($prd, $pro);
        }
        $arr = array_chunk($prd, 4);
        
    @endphp
    @if(!empty($pr))
    <div class='container'>
        <h2 class='text-center'>Related Products</h2>
        <div id="carouselExampleSlidesOnly" class="carousel slide my-5" data-ride="carousel">
            <div class="carousel-inner">

                @foreach ($arr as $key => $item)
                    <div class="carousel-item w-100  {{ $key == 0 ? 'active' : '' }}" style="height: 530px;">
                        <div class="products">
                            @foreach($item as $product)
                                @include('product.single_product')
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    @endif
    @auth
    @if (Auth::user()->is_affiliate=="1")
    <input type="text" readonly="readonly"value="{{'https://echem.com.bd/product/'.$product->id . '/?ref=' . Auth::user()->id }}">
    @else

    @endif
    @endauth
    <div class="my-5 container">
        @php
        $reviews2 = DB::table('reviews')->where('product_id', $product->id)->get();
        $count = 0;
        @endphp
        @foreach ($reviews2 as $review)

            @php
            $count = $count + 1;
            $user = DB::table('users')->where('id', $review->user_id)->first();
            @endphp
            <div class="card my-2 p-3 w-50">
                <h4>{{ $user->name }}</h4>
                @include('_review')
                <p class="my-2">{{ $review->comment }}</p>
            </div>
            @if ($count > 3)
                @break
            @endif
        @endforeach
    </div>


        @if (session()->has('message'))

            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>

        @endif

        @if (session()->has('error'))

            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>

        @endif

        <main>
            @yield('content')
        </main>
        <x-chat/>
    </div>

    @if(auth()->check())
    <script>
        var authuser = @JSON(auth()->user())
    </script>
    @endif


    @livewireScripts
    <x-footer />

</body>

</html>
