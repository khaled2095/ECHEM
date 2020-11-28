@extends('layouts.app')

@section('content')
    <div class="container custom-page my-5">
        <h1 class="text-center mt-5">{{$data->title}}</h1>
        <div id="line" class="my-3">
            <div></div>
        </div>

        <br>
        <br>
        <div class="content">
            {!!$data->content!!}
        </div>

    </div>
@endsection