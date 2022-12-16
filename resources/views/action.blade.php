@extends('layout.app')

@section('content')
<div class="container">
    <div class="d-flex text-white justify-content-between">

        <div class="col-8">
            <div class="title">
                <h3>{{$comics['action']['title']}}</h3>
            </div>
            <div class="buy_price py-2">
                Price: {{$comics['action']['price']}}
            </div>
            <div class="description_item">
                {{$comics['action']['description']}}
            </div>
        </div>

        <div class="col-4">
            <div class="image-item text-end">
                <img src="{{$comics['action']['thumb']}}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection