@extends('layouts.main')
@section('content')

<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data"> 
     <!-- указ-ся имя роута, для отправки данных -->

     @csrf 
     <!-- нужен для метода пост -->


  <div class="mb-3">
    <label for="title" class="form-label"></label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Введите название">
  </div>
<input type="file" name="image">
<button type="submit">Create</button>
</form>

@endsection
