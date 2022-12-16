@extends('layout.app')

@section('content')
<div class="container">
    <div class="row row-cols-6">
        @foreach ($comics as $comic)
        <div class="col">
            <div class="card_item">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                {{$comic['title']}}
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection