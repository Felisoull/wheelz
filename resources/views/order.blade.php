@extends('layouts.main')
@section('content')

<div class="order login_page">
    <img src="{{'images/order.png'}}" alt="">
    <form action="{{route('order.store')}}" method="POST">
        <!-- указ-ся имя роута, для отправки данных -->

        @csrf
        <!-- нужен для метода пост -->

        <h1 class="text-dark">Оставить заявку на аренду </h1>
        <div class="row form-outline mb-3 text-dark">
            <label class="form-label col-md-4 col-form-label text-md-end @error('title') is-invalid @enderror input-box-shadow:red" for="car">Выберите автомобиль</label>
            <select class="form-select mb-2" id="car_id" name="car_id">
                @foreach($cars as $car)
                <option value="{{$car->id}}">{{$car->name}}</option>
                @endforeach
            </select>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
        <div class="row form-outline mb-3 text-dark" style="">
            <label class="form-label col-md-4 col-form-label text-md-end " for="typeNumber">Количество дней для
                бронирования</label>
            <input min="1" max="31" type="number" id="typeNumber" name="quantity" class="form-control mb-2 @error('quantity') is-invalid @enderror input-box-shadow:red" />
            @error('quantity')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="row">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-outline-dark">
                    Оставить заявку на бронирование
                </button>

    </form>
</div>

@endsection