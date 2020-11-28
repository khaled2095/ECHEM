{{-- <section class="large-banner container mt-5">
    <div class="one">
        <div class="img"><img src="{{ asset('images/pattern-1.png') }}" alt=""></div>
        <div class="overlay"></div>
        <div class="info">
            <div class="title">ECHEM - SHOP</div>
            <div class="des">Get the what you need at price you can't imagine</div>
            <br>
        <a href="{{url('/products')}}" class="btn btn-secondary" id=custom>SHOP <span data-feather="arrow-right-circle" id='one'></span></a>
        </div>
    </div>
    <div class="two">
        <div class="seller">
            <div class="img"><img src="{{ asset('images/pattern-3.png') }}" alt=""></div>
            <div class="overlay"></div>
            <div class="info">
                <div class="title">ECHEM - SHOPS</div>
                <div class="des">SIGN UP AS A SELLER AND SELL YOU OWN PRODUCT</div>
                <br>
                <a href="{{ route('shops.create') }}" class="btn btn-secondary" id=custom>SIGNUP <span id='two' data-feather="arrow-right-circle"></span></a>
            </div>
        </div>
        <div class="blog">
            <div class="img"><img src="{{ asset('images/pattern-2.png') }}" alt=""></div>
            <div class="overlay"></div>
            <div class="info">
                <div class="title">ECHEM - BLOG</div>
                <div class="des">LEARN More about our site and what we are offering</div>
                <br>
                <a href="{{ url('/') }}" class="btn btn-secondary" id=custom>LAERN <span id='three' data-feather="arrow-right-circle"></span></a>
            </div>
        </div>
    </div>
</section> --}}


<div class="container-cus my-2">
    <section class="large-banner-1 my-3">

        <div class="one">
            <div class="img" style="background-image: url('{{asset('images/banner-1.jpg')}}')"></div>
            <div class="overlay"></div>
            <div class="content">
                <h2 class="text-light">Echem</h2>
                <h5 class="text-light">Shop from the best</h5>
                <a href="{{route('shop.prod')}}" class="btn btn-secondary" id=custom>SHOP <span data-feather="arrow-right-circle" id='one'></span></a>
            </div>
        </div>
        <div class="one">
            <div class="img" style="background-image: url('{{asset('images/banner-4.jpg')}}')"></div>
            <div class="overlay"></div>
            <div class="content">
                <h2 class="text-light">Wholesale</h2>
                <h5 class="text-light">Are you a wholesale buyer?</h5>
                <a href="{{route('wholesale.prod')}}" class="btn btn-secondary" id=custom>SHOP <span data-feather="arrow-right-circle" id='one'></span></a>
            </div>
        </div>
    </section>
    
    <section class="large-banner-2 my-3">
        <div class="one">
            <div class="img" style="background-image: url('{{asset('images/banner-2.jpg')}}')"></div>
            <div class="overlay"></div>
            <div class="content">
                <h2 class="text-light">Gift & rewards</h2>
                <h5 class="text-light">Earn rewards on your purchase</h5>
                <a href="{{ route('gift') }}" class="btn btn-secondary">Earn Gift</a>
            </div>
        </div>
        <div class="one">
            <div class="img" style="background-image: url('{{asset('images/banner-3.jpg')}}')"></div>
            <div class="overlay"></div>
            <div class="content">
                <h2 class="text-light">Laern</h2>
                <h5 class="text-light">Learn more about us and our efforts</h5>
                <a href="{{ route('project365') }}" class="btn btn-secondary">BLOG</a>
            </div>
        </div>
    </section>
</div>