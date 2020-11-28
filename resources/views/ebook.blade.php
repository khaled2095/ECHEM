@extends('layouts.app')

@section('content')
    <div class="container-cus my-5">
        <div class="ebook-req">
            <form action="{{ route('ebook.r') }}" class="ebook-req-form card p-3">
                <h2>Request Ebook</h2>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" placeholder="Name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Book Title</label>
                    <input type="text" name="ebook_title" placeholder="Book title" class="form-control" required>
                </div>
                <input type="submit" value="SUbmit" class="btn btn-primary w-100">
            </form>
        </div>
    </div>
@endsection
