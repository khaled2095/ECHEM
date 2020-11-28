@extends('layouts.app')

@section('content')
    @php
    $post = $data[0];
    $imgUrl ='storage/' . $post->image
    @endphp
    <div class="my-5 container">
        <div class="post-header" style="background: #121212">
            <h3 class="text-light">{{ $post->title }}</h3>
            <p class="text-light my-3">{{ $post->meta_description }}</p>
        </div>
        <div class="container my-3">
            <img src="{{ asset('storage/' . $post->image) }}" style="width: 100%">
        </div>
        <div class="container my-4">
            {!!$post->body!!}
        </div>
    </div>
@endsection
