@extends('layouts.app')

@section('content')

    <div class="container">
        <div
            style='display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%; height: 300px; background: #121212; color: white;'>
            <h2 class="text-light my-2">PROJECT 365</h2>
            <p class="text-light my-2">Thinking for everyone</p>
        </div>
    </div>
    <div class="container my-5">
        <div id="project">
            @foreach ($posts as $item)
                <div class="card column align-items-center justify-content-start p-1" style="border-radius: 15px;"
                    id='post'>
                    <img src="{{ asset('storage/' . $item->image) }}" style="border-radius: 15px;">
                    <h4 class="my-2">{{ $item->title }}</h4>
                    <a href="{{ route('post', ['slug' => $item->slug]) }}" class="btn btn-secondary w-100">Learn more <i
                            class="mx-2" data-feather="arrow-right"></i></a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container my-5">
        <h3 class="text-center my-5">Download PDFS</h3>
        <div id="project">
            @foreach ($posts as $item)
                @if (strlen($item->pdf) > 2)
                    <div class="card column align-items-center justify-content-start p-1" style="border-radius: 15px;"
                        id='post'>
                        <img src="{{ asset('storage/' . $item->image) }}" style="border-radius: 15px;">
                        {{-- @php
                        dd($item->pdf)
                        @endphp --}}
                        @php
                        $file = null;
                        if(strlen($item->pdf)>2){
                        $file = (json_decode($item->pdf))[0]->download_link;
                        }
                        @endphp
                        <a href="{{ asset('storage/' . $file) }}" class="btn btn-secondary w-100">Download <i class="mx-2"
                                data-feather="download" downlaod></i></a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
