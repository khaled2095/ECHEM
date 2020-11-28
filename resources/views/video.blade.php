@extends('layouts.app')


@section('extraa_css')
    <style>
        .aaa {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px 20px;
        }

        .aaa>video {
            width: 100%;
        }
    </style>
@endsection
@section('content')
    @php
    $data = DB::table('videos')->where('category_id', request('id'))->get();
    $cat = DB::table('video_categories')->where('id', request('id'))->get();

    @endphp
    <div class="container-cus ">
        <div class="vid-info">
            @if (!empty($cat))
                <h2 class="text-light">{{ $cat[0]->name }}</h2>
                <p class="my-3 text-light">{{ $cat[0]->description }}</p>
            @endif
        </div>
    </div>
    <div class="container-cus aaa my-5">
        @foreach ($data as $item)
            {!!$item->video!!}
        @endforeach
    </div>
@endsection
