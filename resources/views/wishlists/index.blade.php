@extends('layouts.app')

@section('content')

<div class="containr my-5">
    <h2 class="text-center my-2">Your Whislist</h2>

    @if(!empty($prod))
    <table class="table container my-3">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wishlists as $item)
            @php
               $pr = DB::table('products')->where('id', $item->product_id)->first();
            @endphp
            <tr>
            <td>
                 <img src="{{ asset('storage/' . $pr->cover_img) }}" alt="{{ $pr->name }}" width='120'>
                {{$pr->name}}
            </td>
            <td>
                <form method="POST" action="{{route('wishlists.destroy', $item->id)}}">

                    @method('DELETE')
                    @csrf

                    <input type="submit" value="Remove" class="btn btn-danger"/>

                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <h3>No Products in wishlists</h3>
    @endif


</div>

@endsection
