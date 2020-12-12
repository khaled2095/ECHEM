@extends('layouts.app')


@section('content')
    @php
        $user = DB::table('users')->where('id' , auth()->id())->first();
    @endphp
    <div class="container auth">
        <div class="card px-3 py-3" id='card-1'>
            <h4 class="text-center my-2">
                Update Pofile
            </h4>
            <form method="POST" action="{{ route('update-profile') }}">
                @csrf
                <div class="form-group" id="auth-group">
                    <label for="email" class="my-2">Email</label>
                    <div>
                        <input placeholder="Email" id="email" type="text"
                            class="form-control"  name="email"
                            value="{{ $user->email }}" autofocus>
                    </div>
                </div>
                <div class="form-group" id="auth-group">
                    <label for="email" class="my-2">Name</label>
                    <div>
                        <input placeholder="Name" id="name" type="text"
                            class="form-control" name="name"
                            value="{{ $user->name }}" autofocus>
                    </div>
                </div>
                <div class="form-group" id="auth-group">
                    <label for="password" class="my-2">Phone</label>
                    <div>
                        <input placeholder="Phone" id="phone" type="text"
                        class="form-control"
                            placeholder="Phone" name='phone' value="{{$user->phone}}">
                    </div>
                </div>
                <div class="form-group" id="auth-group">
                    <label for="password" class="my-2">Password</label>
                    <div>
                        <input placeholder="Password" id="phone" type="text"
                        class="form-control" name='password'>
                    </div>
                </div>
                <div class="ml-1">
                    <div class="ml-1" id='auth-extra'>
                        <button type="submit" class="btn btn-primary w-100">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
