@extends('layouts.main')
@section('content')
<div class="carous">

    <div id="carouselExampleIndicators" class="carousel slide w-100">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{$car->image_1}}" class="d-block w-85" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{$car->image_1}}" class="d-block w-85" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{$car->image_1}}" class="d-block w-85" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>

    <div class="car_show">
        <div class="show_name">
            <p class="show_name">Арендовать <b>{{$car->name}}</b></p>
        </div>
        <div class="show_text">
            <p class="show_year">{{$car->year}}</p>
            <p class="show_fuel"> {{$car->fuel}}</p>
            <p class="show_eng"> {{$car->eng_vol}} л.</p>
            <p class="show_power">{{$car->power}} л. с.</p>
            <p class="show_price">От {{$car->price}} / сутки</p>

        </div>
        <div class="order_button">
            <a class="btn btn-outline-light" href="{{route('order.create',['car' => $car->id])}}">Арендовать</a>
        </div>
    </div>


</div>
@endsection