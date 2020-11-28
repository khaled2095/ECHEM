@extends('layouts.app')

@section('content')
    <div class="container-cus">
        <div class="faq-search">
            <form class="form-inline my-2 my-lg-0" action="{{ route('faq.search') }}" method="GET">
                <input class="form-control " type="text" placeholder="What do you want to know?" id='search' name="search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit" id='search-btn'>Search</button>
            </form>
        </div>
    </div>
    <div class="container-cus my-5">
        <div class="accordion" id="accordionExample" style="width: 70%; margin: 0 auto;">
            @if ($faqs)
                @foreach ($faqs as $item)
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{ $item->question }}
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                {{ $item->answer }}
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h2>NO faqs Found</h2>
            @endif
        </div>
    </div>
@endsection
