@extends('layouts.app')


@section('extra_css')
    <style>
        .site-review {
            width: 100%;
            height: 300px;
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            background: #000;
        }

    </style>
@endsection

@section('content')
    <div class="container my-3">
        <div class="site-review">
            <h2 class="text-light text-center">reviews</h2>
        </div>
        <div class="reviews-site my-5">

            @php
            $reviews = DB::table('reviews')->get();
            $total = 0;
            foreach ($reviews as $r) {
            # code...
            $total = $total + $r->star;
            }
            $r = $total/$reviews->count();
            @endphp
            <div class="total-review">
                <div>
                    @if ($r == 0)
                        <div class="pl-3 my-3 row align-items-center">
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                        </div>
                    @endif
                    @if ($r == 1)
                        <div class="pl-3 my-3 row align-items-center">
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                        </div>
                        <p>Based on {{ $reviews->count() }} Reviews</p>
                    @endif
                    @if ($r == 2)
                        <div class="pl-3 my-3 row align-items-center">
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                        </div>
                        <p>Based on {{ $reviews->count() }} Reviews</p>
                    @endif
                    @if ($r == 3)
                        <div class="pl-3 my-3 row align-items-center">
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                        </div>
                        <p>Based on {{ $reviews->count() }} Reviews</p>
                    @endif
                    @if ($r == 4)
                        <div class="pl-3 my-3 row align-items-center">
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star"></i>
                        </div>
                        <p>Based on {{ $reviews->count() }} Reviews</p>
                    @endif
                    @if ($r == 5)
                        <div class="pl-3 my-3 row align-items-center">
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star" style="fill: yellow;"></i>
                            <i data-feather="star" style="fill: yellow"></i>
                        </div>
                        <p>Based on {{ $reviews->count() }} Reviews</p>

                    @endif
                </div>
            </div>
            <div class="xyz">
                @foreach ($reviews as $item)
                    @php
                    $user = DB::table('users')->where('id', $item->user_id)->get()[0];
                    @endphp
                    <div class="p-3">
                        <div>
                            @if ($item->star == 0)
                                <div class="pl-3 my-3 row align-items-center">
                                    <i data-feather="star"></i>
                                    <i data-feather="star"></i>
                                    <i data-feather="star"></i>
                                    <i data-feather="star"></i>
                                    <i data-feather="star"></i>
                                </div>
                            @endif
                            @if ($item->star == 1)
                                <div class="pl-3 my-3 row align-items-center">
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star"></i>
                                    <i data-feather="star"></i>
                                    <i data-feather="star"></i>
                                    <i data-feather="star"></i>
                                </div>
                            @endif
                            @if ($item->star == 2)
                                <div class="pl-3 my-3 row align-items-center">
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star"></i>
                                    <i data-feather="star"></i>
                                    <i data-feather="star"></i>
                                </div>
                            @endif
                            @if ($item->star == 3)
                                <div class="pl-3 my-3 row align-items-center">
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star"></i>
                                    <i data-feather="star"></i>
                                </div>
                            @endif
                            @if ($item->star == 4)
                                <div class="pl-3 my-3 row align-items-center">
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star"></i>
                                </div>
                            @endif
                            @if ($item->star == 5)
                                <div class="pl-3 my-3 row align-items-center">
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star" style="fill: yellow;"></i>
                                    <i data-feather="star" style="fill: yellow"></i>
                                </div>
        
                            @endif
                        </div>
                        <p class="my-2" style="font-weight: bold">{{ $user->name }}</p>
                        <p class="my-2">{{ $item->comment }}</p>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
