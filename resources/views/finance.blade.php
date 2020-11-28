

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
    <form action="{{route('f.p.req')}}" class="contact" method="POST">
            @csrf
            <h3 class="my-2">
                Leave a message
            </h3>
            <div class="form-group w-100">
                <label for="">Amount</label>
                <input type="text" class="form-control my-2" placeholder="Amount" name="amount">
            </div>
            <div class="form-group w-100">
                <label for="">First Name</label>
                <input type="text" class="form-control my-2" placeholder="First Name" name="first_name">
            </div>
            <div class="form-group w-100">
                <label for="">Last Name</label>
                <input type="text" class="form-control my-2" placeholder="Last Name" name="last_name">
            </div>
            <div class="form-group w-100">
                <label for="">Email</label>
                <input type="text" class="form-control my-2" placeholder="Email" name="email">
            </div>
            <div class="form-group w-100">
                <label for="">Business Name</label>
                <input type="text" class="form-control my-2" placeholder="Business Name" name="business_name">
            </div>
            <div class="form-group w-100">
                <label for="">Address</label>
                <input type="text" class="form-control my-2" placeholder="Address" name="address">
            </div>
            <div class="form-group w-100">
                <label for="">Equipment Description</label>
                <textarea name="detail" id="" cols="30" rows="10" class="form-control my-2" placeholder="Your message"></textarea>
            </div>
            
            
            <input type="submit" value="Submit" class="btn btn-primary w-100">
        </form>
    </div>
@endsection