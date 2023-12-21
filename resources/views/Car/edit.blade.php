@extends('layouts.main')
@section('content')
<div class="create_page">
<form action="{{route('car.update',['car' => $car->id])}}" method="POST" enctype="multipart/form-data">
  <!-- указ-ся имя роута, для отправки данных -->

  @csrf
  <!-- нужен для метода пост -->
  @method('patch');

  <div class="mb-3">
    <label for="name" class="form-label"></label>
    <input type="text" name="name" class="form-control" id="name" value="{{$car->name}}">
  </div>
  <div class="mb-3">
    <label for="year" class="form-label"></label>
    <input type="text" name="year" class="form-control" id="year" value="{{$car->year}}">
  </div>
  <div class="mb-3">
    <label for="power" class="form-label"></label>
    <input type="text" name="power" class="form-control" id="power" value="{{$car->power}}">
  </div>
  <div class="mb-3">
    <label for="eng_vol" class="form-label"></label>
    <input type="text" name="eng_vol" class="form-control" id="eng_vol" value="{{$car->eng_vol}}">
  </div>
  <div class="mb-3">
    <label for="fuel" class="form-label"></label>
    <input type="text" name="fuel" class="form-control" id="fuel" value="{{$car->fuel}}">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label"></label>
    <input type="text" name="price" class="form-control" id="price" value="{{$car->price}}">
  </div>

  <div class="mb-3">
    <label for="image_1" class="form-label"></label>
    <input type="file" name="image_1" class="form-control" id="image_1" placeholder="image1">
  </div>

  <label for="category">Категории</label>
  <select class="form-select mb-2" id="category" name="category_id">


    @foreach($categories as $category)
    <option {{$category->id === $car->category_id ? 'selected' : ''}}
      value="{{$category->id}}">{{$category->title}}</option>
    @endforeach
  </select>


  <button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
@endsection