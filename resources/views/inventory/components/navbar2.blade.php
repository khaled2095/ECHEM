<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">
            <img src="{{ asset('images/logo.jpeg') }}" width='100' alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <form class="form-inline my-2 my-lg-0" action="{{ route('products.search') }}" method="GET">
                    <input class="form-control " type="text" placeholder="What are you looking for?" id='search'
                        name="query">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit" id='search-btn'>Search</button>
                </form>
            </ul>
            <ul class="navbar-nav float-right" id='auth-nav'>
                <li class="nav-item">
                    <a href="{{ url('/') }}" id="tag" class="mx-3">#Echem</a>
                </li>
                <li class="nav-item active d-none" id='mobile'>
                    <a href="{{ route('wholesale.prod') }}" class="nav-link">Wholesale Products</a>
                </li>
                <li class="nav-item active d-none" id='mobile'>
                    <a class="nav-link" href="{{ route('gift') }}" id='fix-font'>Gift & rewards</a>
                </li>
                <li class="nav-item active d-none" id='mobile'><a href="{{ route('project365') }}"
                        class="nav-link">Project 365</a></li>
                @guest
                    <li class="nav-item active">
                        <a class="btn btn-primary btn-sm" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>

                @else
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="user"></i>
                        </a>

                        <div class="dropdown-menu active" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('dash') }}">
                                Dashboard
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cart.index') }}" class="nav-link active">
                            <i data-feather="shopping-bag"></i>
                            <div class="badge badge-danger">

                                @auth
                                    {{ Cart::session(auth()->id())->getContent()->count() }}
                                @endauth

                            </div>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ route('wishlists.index') }}" class="nav-link">
                            <i data-feather="heart"></i>
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="mega-cus">
    <div class="navs mr-2">
        <p>shop</p>
        <div class="cus">
            <div class="one">
                <div class="imgs">
                <img src="{{asset('images/prod.jpg')}}" alt="">
                <br>
                <img src="{{asset('images/prod-1.jpeg')}}" alt="">
                </div>
                @php
                         $categories = TCG\Voyager\Models\Category::where('parent_id', null)->get();
                         @endphp
                         <div class="custom-menus">
                             @foreach ($categories as $catHead)
                                 <a href="{{ route('products.index', ['category_id' => $catHead->id]) }}"
                                     class="cat-head mb-2" id='fix-font'>{{ $catHead->name }}</a>
                                 @php
                                 $innrs = TCG\Voyager\Models\Category::where('parent_id', $catHead->id)->get();
                                 @endphp
                                 @foreach ($innrs as $innr)
                                     <a href="{{ route('products.index', ['category_id' => $innr->id]) }}"
                                         class="cat-sub" id='fix-font'>{{ $innr->name }}</a>
                                 @endforeach
                             @endforeach
                         </div>
            </div>
        </div>
    </div>
    <div class="navs mr-2">
        <p>Learn</p>
        <div class="cus">
        </div>
    </div>
</div>