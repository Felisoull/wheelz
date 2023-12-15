@extends('layouts.main')
@section('content')
<div class="mb-3">
     <div>{{$car->id}} . {{$car->name}}</div>
     <div>{{$car->fuel}}</div>
</div>
<div class="mb-3"><a class="btn btn-success" href="{{route('car.edit', $car->id)}}">Edit</a></div>

    @csrf
    @method('delete')
  <input class="btn btn-danger" type="submit" value="Delete">
 </form>
<div class="mb-3">
    <a class="btn btn-light" href="{{route('car.index')}}">Back</a>
</div>
@endsection
