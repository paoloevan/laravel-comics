@extends('layout.app')

@section('content')
<div class="jumbotron">
    <img src="{{ Vite::asset('resources/images/jumbotron.jpg')}}" alt="">

    <span class="current">current series</span>

</div>

<div class="container">
    <div class="row row-cols-6">
        @foreach ($comics as $key => $comic)
        <div class=" my_card">
            <div class="card_image">
                @if ($key === 0)
                <a href="{{route('actions')}}">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </a>
                @else
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                @endif
            </div>
            <div class="card_title">
                {{$comic['title']}}
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection