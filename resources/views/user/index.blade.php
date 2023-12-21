@extends('layouts.main')
@section('content')
<h1>Мои заказы</h1>
<div>
   <p>cjci {{ Auth::user()->name }}</p>
<div class="orders gridd mt-4">
    @foreach($orders as $order)
    <div class="order_card mt-3">
        <div class="order_title">
            <p class="order_user">Имя пользователя: <b>{{$order->user->name}}</b></p>
            <p class="order_car">Автомобиль: <b>{{$order->car->name}}</b></p>
            <p class="order_time">Время создания: <b>{{$order->created_at}}</b></p>
            <p class="order_time">Статус: <b>{{$order->status}}</b></p>
        </div>

    </div>

@endforeach
</div></div>
@endsection