<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Car;


class CarController extends Controller
{
  public function index()
  {
    $cars = Car::all();

    return view('car.index', compact('cars')); //передача переменной posts в view


  }


  public function show(Car $car) ///поиск по айди , если такого айди нет, то возвращает ошибку 404
  {
    
    return view('car.show', compact('car'));
  }



  public function create()
  {
    $categories = Category::all();
    return view('car.create', compact('categories'));
  }
  public function store(Request $request)
  {

    $filename_1 = '';
    if ($request->hasFile('image_1')) {
      $filename_1 = $request->getSchemeAndHttpHost . '/images/' . time() . '.' . $request->image_1->extension();
      $request->image_1->move(public_path('/images/'), $filename_1);
    }
    $filename_2 = '';
    if ($request->hasFile('image_2')) {
      $filename_2 = $request->getSchemeAndHttpHost . '/images/' . time() . '.' . $request->image_2->extension();
      $request->image_2->move(public_path('/images/'), $filename_2);
    }
    $filename_3 = '';
    if ($request->hasFile('image_3')) {
      $filename_3= $request->getSchemeAndHttpHost . '/images/' . time() . '.' . $request->image_3->extension();
      $request->image_3->move(public_path('/images/'), $filename_3);
    }
    $car = Car::create(
      [
        'name' => $request->name,
        'year' => $request->year,
        'power' => $request->power,
        'eng_vol' => $request->eng_vol,
        'fuel' => $request->fuel,
        'price' => $request->price,
        'image_1' => $filename_1,
        'image_2' => $filename_2,
        'image_3' => $filename_3,
        'category_id'=>$request->category_id
      ]);
    return redirect()->back();
  }


  public function edit(Car $car)
  {
    $categories = Category::all();
    return view('car.edit', compact('car', 'categories'));
  }

  public function update(Car $car)
  {
    $data = request()->validate([
      'name' => 'string',
      'year' => 'string', //данные которые придут с форм добавления и типы данных
      'power' => 'string',
      'eng_vol' => 'string',
      'fuel' => 'string',
      'price' => 'string',
      'image_1' => 'string',
      'image_2' => 'string',
      'image_3' => 'string',
      'category_id' => 'string'
    ]);
    $car->update($data);
    return redirect()->route('car.show', $car->id);
  }

}

