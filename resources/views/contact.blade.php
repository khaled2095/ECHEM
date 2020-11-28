

@extends('layouts.app')

@section('extra_css')
    <style>
        .contact{
            margin: 0 auto;
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
@endsection

@section('content')
    <div class="container">
    <form action="{{route('contact.post')}}" class="contact" method="GET">
            @csrf
            <h3 class="my-2">
                Leave a message
            </h3>
            <div class="form-group w-100">
                <label for="">Name</label>
                <input type="text" class="form-control my-2" placeholder="name" name="name">
                
            </div>
            <div class="form-group w-100">
                <label for="">Email</label>
                <input type="text" class="form-control my-2" placeholder="email" name="email">
            </div>
            <div class="form-group w-100">
                <label for="">Message</label>
                <textarea name="msg" id="" cols="30" rows="10" class="form-control my-2" placeholder="Your message"></textarea>

            </div>
            <input type="submit" value="Submit" class="btn btn-primary w-100">
        </form>
    </div>
@endsection