@extends('layouts.main')
@section('content')
<div>


    <div class="land_category">
        <h1>Админ панель</h1>
        <a class=" m-3 admin_link link-secondary" href="{{route('category.create')}}">Добавить категорию <i
                class="bi bi-plus-circle-fill"></i></a>
        <div class="categories_lis container">
            @if($categories )
            @foreach($categories as $category)
            <div class="m-3">
                <a href="{{route('carByCategory', $category->id)}}" class="category_main">
                    <img src="{{$category->image}}" alt="">
                    <div class="m-3">{{$category->title}}
                        <form action="{{route('category.delete', $category->id)}}" method="POST" class="mt-2">
                            @csrf
                            @method('delete')
                            <button class="btn btn-link red" type="submit"><i class="bi bi-trash3 m-2"></i></button>
                        </form>
                    </div>
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    <a class=" m-3 admin_link link-secondary" href="{{route('car.create')}}">Добавить автомобиль<i
            class="bi bi-plus-circle-fill"></i></a>

    <div class="carss mt-4">
        @foreach($cars as $car)

        <div class="car_car">
            <div class="car_titl">
                <p class="car_nam">{{$car->name}}</p>

            </div>
            <div class="car_image"><img src="{{$car->image_1}}" alt="">
                <div class="car_links">
                    <form action="{{route('car.delete', $car->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-link red" type="submit"><i class="bi bi-trash3"></i></button>
                    </form>
                    <!-- <button class="btn btn-link editcar" href="{{route('car.edit',['car' => $car->id])}}"><i
                            class="bi bi-pencil-fill"></i></button> -->
                            <a class="btn btn-link editcar" href="{{route('car.edit',['car' => $car->id])}}"><i
                            class="bi bi-pencil-fill"></i></a>
                </div>

            </div>
        </div>

        @endforeach

    </div>{{$cars->withQueryString()->links('pagination::bootstrap-5')}}

</div>

@endsection