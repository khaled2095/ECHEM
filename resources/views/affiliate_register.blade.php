@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="/affiliate-apply" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="exampleInputEmail1">Company Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="company" aria-describedby="emailHelp" placeholder="Enter Company Name">
          <small id="emailHelp" class="form-text text-muted">We'll never share your info with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Designation</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="designation" placeholder="Designation">
        </div>
        <button type="submit" class="btn btn-primary">Apply</button>
      </form>
    </div>
  </div>
</div>

@endsection
