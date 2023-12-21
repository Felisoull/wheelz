@extends('layouts.main')
@section('content')
<h1>Заказы</h1>
<div>
<div class="orders gridd mt-4">
    @foreach($orders as $order)
    <div class="order_card mt-3">
        <div class="order_title">
            <p class="order_user">Имя пользователя: <b>{{$order->user->name}}</b></p>
            <p class="order_car">Автомобиль: <b>{{$order->car->name}}</b></p>
            <p class="order_time">Время создания: <b>{{$order->created_at}}</b></p>
            <p class="order_time">Статус: <b>{{$order->status}}</b></p>
        </div>
        <div class="car_links">
            <form action="{{route('order.delete', $order->id)}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-link red" type="submit"><i class="bi bi-x-circle"></i></button>
            </form>

        </div>

    </div>

@endforeach
</div></div>
@endsection