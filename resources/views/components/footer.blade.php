<footer class="p-5">
    <div class="container-cus foot">
        <div>
            <p class="section-head">Learn</p>
            <a href="{{ route('contact') }}" class="cat-head my-2">Help</a>
            <a href="{{ route('faq') }}" class="cat-sub active my-2">FAQ</a>
            <a href="{{ route('contact') }}" class="cat-sub active my-2">Contact</a>
        </div>
        <div>
            <p class="section-head">Join for free</p>
            <p class="text-light">Join thousands already earning rewards, saving money, and growing their screen printing business
            <span class="h3"> <a class="h2 text-success" href="{{route('register')}}">Join Here</a></span>
            </p>
            <a href="http://echem.com.bd/apps/_Echem_12584216.apk"><img src="https://echem.com.bd/images/google-play-badge.png" width='100'/></a>
        </div>
        <div>
            <p class="section-head">Contact</p>
            <p class="text-light">02 8413289, +880-1880-006-355, 01880006362</p>
        </div>
        <div>
            <div class="section-head">Follow Us</div>
            <div class="social">
                <a href="https://www.facebook.com/echem.com.bd/"><i data-feather='facebook'></i></a>
                <a href="#"><i data-feather='twitter'></i></a>
                <a href="#"><i data-feather='instagram'></i></a>
                <a href="#"><i data-feather='youtube'></i></a>
                
            </div>
        </div>
    </div>
    <div class="container-cus foot-2 my-4">
        <a href="{{ route('wishlists.index') }}">
            wishlists
        </a>
        <a href="{{ route('gift') }}">Gift & rewards</a>
        <a href="{{ route('wholesale.prod') }}">Wholesale Products</a>
        <a href="{{ route('faq') }}">FAQ</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('project365') }}">Project <span class="badge badge-primary">365</span></a>
        @guest
            <li class="nav-item active"><a href="/affiliate-register" class="nav-link">Become Affiliate</a></li>
        @endguest
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        feather.replace()

    </script>
</footer>
