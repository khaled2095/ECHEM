 <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
     <div class="container-cus">
         <div id="logo"></div>
         <div class="navbar-toggler-right">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                 aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                 <i data-feather='menu'></i>
             </button>
         </div>
         <div class="collapse navbar-collapse flex-column " id="navbar">

             <ul class="navbar-nav  w-100 flex-row align-items-center justify-content-between px-3" id='fix-nav'>
                 <div id="desk-logo"><a href="{{ url('/') }}" class="navbar-brand">
                         <img src="{{ asset('images/logo.jpeg') }}" width='100' alt="">
                     </a></div>
                 <form class="form-inline my-2 my-lg-0" action="{{ route('products.search') }}" method="GET">
                     <input class="form-control " type="text" placeholder="What are you looking for?" id='search'
                         name="query">
                     <button class="btn btn-primary my-2 my-sm-0" type="submit" id='search-btn'>Search</button>
                 </form>
                 <div class="row align-items-center">
                     <!--<a href="https://www.echem.com.bd/apps/_Echem_12584216.apk" id="tag" class="mx-3">DOWNLOAD ECHEM APP</a>-->
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
                                 <a class="dropdown-item" href="{{ route('edit-profile') }}">
                                    Edit Profile
                                </a>
                                 @if (!auth()
                                    ->user()
                                    ->hasRole('seller') &&
                                !auth()
                                    ->user()
                                    ->hasRole('wholesale-seller'))

                                     <a class="dropdown-item" href="{{ route('shops.create') }}">
                                         Open Merchant Account
                                     </a>

                                 @endif

                                 @if (!auth()
                                                ->user()
                                                ->hasRole('wholesale-seller') &&
                                            !auth()
                                                ->user()
                                                ->hasRole('seller'))
                                     <a class="dropdown-item" href="{{ route('wholesales.create') }}">
                                         Open Wholesale Shop
                                     </a>
                                 @endif


                                 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                         <li class="nav-item active">
                             <a href="{{ route('chat') }}" class="nav-link">
                                 CHAT
                             </a>
                         </li>
                     @endguest

                 </div>
             </ul>
             {{-- Mega Menu --}}
             <ul class="navbar-nav  w-100 flex-row align-items-center justify-content-start px-3" id='fix-nav'>
                 <li class="nav-item dropdown has-megamenu active" id='fix-nav-mega'>
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id='fix-font'> SHOP </a>
                     <div class="dropdown-menu megamenu">

                         <ul class="abc flex-row w-100 align-items-center justify-content-between" id="mega-fix-mobile">
                             <li class="" id='offer'>
                                 <div id="">
                                     <img src="{{ asset('images/prod.jpg') }}" width="150" alt="">
                                 </div>
                                 <div id="">
                                     <img src="{{ asset('images/prod-1.jpeg') }}" width="150" alt="">
                                 </div>
                             </li>
                             @php
                             $categories = TCG\Voyager\Models\Category::where('parent_id', null)->get();
                             @endphp
                             <li class="custom-menus">
                                 @foreach ($categories as $catHead)
                                     <div>
                                         <a href="{{ route('products.index', ['category_id' => $catHead->id]) }}"
                                             class="cat-head mb-2" id='fix-font'>{{ $catHead->name }}</a>
                                         @php
                                         $innrs = TCG\Voyager\Models\Category::where('parent_id', $catHead->id)->get();
                                         @endphp
                                         @foreach ($innrs as $innr)
                                             <a href="{{ route('products.index', ['category_id' => $innr->id]) }}"
                                                 class="cat-sub" id='fix-font'>{{ $innr->name }}</a>
                                         @endforeach
                                     </div>
                                 @endforeach
                             </li>
                         </ul>

                     </div> <!-- dropdown-mega-menu.// -->
                 </li>
                 <li class="nav-item dropdown has-megamenu active" id='fix-nav-mega'>
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id='fix-font'> learn </a>
                     <div class="dropdown-menu megamenu">

                         <ul class="abc flex-row w-100 align-items-center justify-content-between" id="mega-fix-mobile">
                             <li class="" id='offer'>
                                 <div id="">
                                     <img src="{{ asset('images/blog.jpg') }}" width="150" alt="">
                                     <h5 class="my-3">Learn</h5>
                                 </div>
                             </li>
                             <li class="custom-menus-l">
                                 <div>
                                     <a href="#" class="cat-head">Learn</a>
                                     @php
                                     $cat = DB::table("post_categories")->get();
                                     @endphp
                                     @foreach ($cat as $item)
                                         <a href="{{ route('post.by.cat', ['id' => $item->id]) }}" class="cat-sub">{{$item->name}}</a>
                                     @endforeach

                                 </div>
                                 <div>
                                     <a href="#" class="cat-head">Videos</a>
                                     @php
                                     $vid_cat = DB::table('video_categories')->get();
                                     @endphp
                                     @if (!empty($vid_cat))
                                         @foreach ($vid_cat as $item)
                                             <a href="{{ route('video', $item->id) }}"
                                                 class="cat-sub">{{ $item->name }}</a>
                                         @endforeach
                                     @endif

                                 </div>
                                 <div>
                                     <a href="{{ route('ebook') }}" class="cat-head"></a>
                                     <a href="{{ route('ebook') }}" class="cat-sub">Carfting you design</a>
                                     <a href="{{ route('ebook') }}" class="cat-sub">Developing your customer</a>
                                     <a href="{{ route('ebook') }}" class="cat-sub">Design Optimization</a>
                                     <a href="{{ route('ebook') }}" class="cat-sub">Running at Full Speed</a>
                                 </div>
                             </li>
                         </ul>

                     </div> <!-- dropdown-mega-menu.// -->
                 </li>
                 <li class="nav-item dropdown has-megamenu active" id='fix-nav-mega'>
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id='fix-font'> Support </a>
                     <div class="dropdown-menu megamenu">

                         <ul class="abc flex-row w-100 align-items-start justify-content-between" id="mega-fix-mobile">
                             <li class="" id='offer'>
                                 <div id="">
                                     <img src="{{ asset('images/contact.jpg') }}" width="150" alt="">
                                     <a href={{route('contact')}} class="cat-head"><h3 class='my-4'>Contact For Support</h3></a>
                                 </div>

                             </li>
                             <li class="custom-menus-sup">
                                 <div>
                                     <a href="{{ route('contact') }}" class="cat-head">Help</a>
                                     <a href="{{ route('faq') }}" class="cat-sub active">FAQ</a>
                                     <a href="{{ route('contact') }}" class="cat-sub active">Contact</a>
                                 </div>
                                 <div>
                                     @php
                                        $page = DB::table('custom_pages')->where('label', 'Financing')->first();
                                        $page2 = DB::table('custom_pages')->where('label', 'RE-MESHING')->first();
                                     @endphp
                                     <a href="{{route('custom.pages', ['id' => $page->id])}}" class="cat-sub active" >Financing</a>
                                     <a href="{{route('custom.pages', ['id' => $page2->id])}}" class="cat-sub active" >SCREEN RE-MESHING</a>

                                 </div>
                                 <div>
                                     <p class="my-2"><i data-feather='phone' class="mx-2"></i> 02 8413289,
                                         +880-1880-006-355,
                                         01880006362
                                     </p>
                                     <p class="my-2"><i data-feather='mail' class="mx-2"></i> sales@echem.com.bd,
                                         echembd@gmail.com
                                     </p>
                                 </div>
                             </li>
                         </ul>

                     </div> <!-- dropdown-mega-menu.// -->
                 </li>
                 @php
                 $mobile = TCG\Voyager\Models\Category::where('name', 'Brands')->get();
                 @endphp
                 @foreach ($mobile as $item1)
                     <li class="nav-item dropdown active" id='only-mobile'>
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id='fix-font'>
                             Brands
                         </a>

                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             @php
                             $mobileInnr = TCG\Voyager\Models\Category::where('parent_id', $item1->id)->get();
                             @endphp
                             @foreach ($mobileInnr as $item)
                                 <a href="{{ route('products.index', ['category_id' => $item->id]) }}"
                                     class="dropdown-item" id='fix-font'>{{ $item->name }}</a>
                             @endforeach
                         </div>
                     </li>
                 @endforeach
                 <li class="nav-item active">
                     <a href="{{ route('wholesale.prod') }}" class="nav-link">Wholesale Products</a>
                 </li>

                 <li class="nav-item active">
                     <a href="{{ route('refurbished.prod') }}" class="nav-link">Refurbished Products</a>
                 </li>

                 <li class="nav-item active">
                     <a class="nav-link" href="{{ route('gift') }}" id='fix-font'>Gift & rewards</a>
                 </li>

                 <li class="nav-item active"><a href="{{ route('project365') }}" class="nav-link">Project <span
                             class="badge badge-primary">365</span></a></li>
                @auth
                @if(auth()->user()->is_affiliate == 0)
                <li class="nav-item active"><a href="/affiliate-register" class="nav-link">Become Affiliate</a></li>
                @endif
                @endauth
                @guest
                <li class="nav-item active"><a href="/affiliate-register" class="nav-link">Become Affiliate</a></li>
                @endguest
             </ul>
         </div>
     </div>
 </nav>
