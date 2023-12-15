@extends('layouts.main')
@section('content')
<div>


    <div class="land_category">
        <h1>Прокат автомобилей</h1>

        <div class="categories_list container">
            @if($categories )
            @foreach($categories as $category)
            <a href="{{route('carByCategory', $category->id)}}" class="category_main">
                <img src="{{$category->image}}" alt="">
                <div class="m-3">{{$category->title}}</div>
            </a>
            @endforeach
            @endif
        </div>
    </div>
    <div class="cars mt-4">
        @foreach($cars as $car)
        <a class="car_link" href="{{route('car.show', $car->id)}}">
            <div class="card_car">
                <div class="car_title">
                    <p class="car_name">{{$car->name}}</p>
                    <p class="car_price">{{$car->price}} / сутки</p>

                </div>
                <div class="car_image"><img src="{{$car->image_1}}" alt=""></div>
            </div>
        </a>
        @endforeach
    </div>
</div>


@endsection