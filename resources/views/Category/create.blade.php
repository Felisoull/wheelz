@extends('layouts.main')
@section('content')
 <div class="create_page">
<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data"> 
     <!-- указ-ся имя роута, для отправки данных -->

     @csrf 
     <!-- нужен для метода пост -->

 <h2 class="text-dark m-auto">Добавление категории</h2>
  <div class="mb-3">
    <label for="title" class="form-label"></label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror input-box-shadow:red" id="title" placeholder="Введите название">
    @error('title')
    <div class="alert alert-danger">{{ 'Обязательное поле для ввода!' }}</div>
@enderror
  </div>
  <div class="mb-3">
    <label for="image" class="form-label"></label>
    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror input-box-shadow:red" id="image" placeholder="images">
    @error('image')
    <div class="alert alert-danger">{{ 'Изображение не прикреплено!' }}</div>
@enderror
  </div>
<button class="btn btn-outline-dark" type="submit">Create</button>
</form>
</div>
@endsection
