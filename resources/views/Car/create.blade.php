@extends('layouts.main')
@section('content')

<form action="{{route('car.store')}}" method="POST" enctype="multipart/form-data"> 
     <!-- указ-ся имя роута, для отправки данных -->

     @csrf 
     <!-- нужен для метода пост -->


  <div class="mb-3">
    <label for="name" class="form-label"></label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Введите название">
  </div>
  <div class="mb-3">
    <label for="year" class="form-label"></label>
    <input type="text" name="year" class="form-control" id="year" placeholder="Год выпуска">
  </div>
  <div class="mb-3">
    <label for="power" class="form-label"></label>
    <input type="text" name="power" class="form-control" id="power" placeholder="Кол-во лошадиных сил">
  </div>
  <div class="mb-3">
    <label for="eng_vol" class="form-label"></label>
    <input type="text" name="eng_vol" class="form-control" id="eng_vol" placeholder="Мощность двигателя">
  </div>
  <div class="mb-3">
    <label for="fuel" class="form-label"></label>
    <input type="text" name="fuel" class="form-control" id="fuel" placeholder="Вид топлива">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label"></label>
    <input type="text" name="price" class="form-control" id="price" placeholder="Цена">
  </div>
  <div class="mb-3">
    <label for="image_1" class="form-label"></label>
    <input type="file" name="image_1" class="form-control" id="image_1" placeholder="image1">
  </div>
  <div class="mb-3">
    <label for="image_2" class="form-label"></label>
    <input type="file" name="image_2" class="form-control" id="image_2" placeholder="image2">
  </div>
  <div class="mb-3">
    <label for="image_3" class="form-label"></label>
    <input type="file" name="image_3" class="form-control" id="image_3" placeholder="image3">
  </div>
    <label for="category">Категории</label>
  <select class="form-select mb-2" id="category" name="category_id">
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->title}}</option>
      @endforeach
    </select>


  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection
