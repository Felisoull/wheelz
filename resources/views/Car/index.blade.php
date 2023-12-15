@extends('layouts.main')
@section('content')


<div>
    @foreach($cars as $car)
    <div class="mb-3"><a href="{{route('car.show', $car->id)}}">{{$car->id}} . {{$car->title}}
            <img src="{{$car->image_1}}" alt="">
        </a></div>
    @endforeach
    
</div>

@endsection