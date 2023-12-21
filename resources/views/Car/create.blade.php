@extends('layouts.main')
@section('content')
<div class="create_page">
<form action="{{route('car.store')}}" method="POST" enctype="multipart/form-data"> 
     <!-- указ-ся имя роута, для отправки данных -->

     @csrf 
     <!-- нужен для метода пост -->
     <h2 class="text-dark m-auto">Добавление автомобиля</h2>
  <div class="mb-3">
    <label for="name" class="form-label"></label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror input-box-shadow:red" id="name" placeholder="Введите название">
    @error('name')
    <div class="alert alert-danger">{{ 'Обязательное поле для ввода' }}</div>
@enderror
  </div>
  <div class="mb-3 text-dark">
    <label for="year" class="form-label"></label>
    <input type="text" name="year" class="form-control @error('year') is-invalid @enderror input-box-shadow:red" id="year" placeholder="Год выпуска">
    @error('year')
    <div class="alert alert-danger">{{ 'Обязательное поле для ввода' }}</div>
@enderror
  </div>
  <div class="mb-3">
    <label for="power" class="form-label"></label>
    <input type="text" name="power" class="form-control @error('power') is-invalid @enderror input-box-shadow:red" id="power" placeholder="Кол-во лошадиных сил">
    @error('power')
    <div class="alert alert-danger">{{ 'Обязательное поле для ввода' }}</div>
@enderror
  </div>
  <div class="mb-3">
    <label for="eng_vol" class="form-label"></label>
    <input type="text" name="eng_vol" class="form-control @error('eng_vol') is-invalid @enderror input-box-shadow:red" id="eng_vol" placeholder="Обьем двигателя">
    @error('eng_vol')
    <div class="alert alert-danger">{{ 'Обязательное поле для ввода' }}</div>
@enderror
  </div>
  <div class="mb-3">
    <label for="fuel" class="form-label"></label>
    <input type="text" name="fuel" class="form-control @error('fuel') is-invalid @enderror input-box-shadow:red" id="fuel" placeholder="Вид топлива">
    @error('fuel')
    <div class="alert alert-danger">{{ 'Обязательное поле для ввода' }}</div>
@enderror
  </div>
  <div class="mb-3">
    <label for="price" class="form-label"></label>
    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror input-box-shadow:red" id="price" placeholder="Цена">
    @error('price')
    <div class="alert alert-danger">{{ 'Обязательное поле для ввода' }}</div>
@enderror
  </div>
  <div class="mb-3">
    <label for="image_1" class="form-label"></label>
    <input type="file" name="image_1" class="form-control @error('image_1') is-invalid @enderror input-box-shadow:red" id="image_1" placeholder="image1">
    @error('image_1')
    <div class="alert alert-danger">{{ 'Изображение не прикреплено!' }}</div>
@enderror
  </div>
    <label for="category">Категории</label>
  <select class="form-select mb-2 @error('category_id') is-invalid @enderror input-box-shadow:red" id="category" name="category_id">
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->title}}</option>
      @endforeach
    </select>
    @error('category_id')
    <div class="alert alert-danger">{{ 'Обязательное поле для ввода' }}</div>
@enderror

  <button type="submit" class="btn btn-dark">Добавить</button>
</form>
</div>
@endsection
