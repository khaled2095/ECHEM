@extends('layouts.app')


@section('content')




<div class="container">
    
    <h2>Open Wholesale Acocunt</h2>
    
    <form action="{{route('wholesales.store')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Name of Wholesale Account</label>
        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
    </div>

    <div class="form-group">
        <label for="description">Wholesale Description</label>
        <textarea class="form-control" name="description" id="" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection
