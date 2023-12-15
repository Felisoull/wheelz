@extends('layouts.main')
@section('content')
<div>
    <div class="land">
        <div class="text_land">
            <p>Аренда премиальных автомобилей</p>
            <button type="button" class="btn "> &#62; КАТАЛОГ АВТОМОБИЛЕЙ</button>
        </div>
        <img src="{{url('/images/main.png')}}" alt="">
    </div>
    <div class="land_category">
        <H1>Категории автомобилей</H1>

        <div class="categories_list container">
            @foreach($categories as $category )
            <a href="" class="category_main">
                <img src="{{$category->image}}" alt="">
                <div class="m-3">{{$category->title}}</div>
            </a>
            @endforeach
        </div>
    </div>



</div>
@endsection