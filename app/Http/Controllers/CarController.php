<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Car;


class CarController extends Controller
{


  private const CAR_VALIDATOR = [
    'name' => 'required|max:50',
    'year' => 'required',
    'price' => 'required|numeric',
    'image_1' => 'required',
    'fuel' => 'required',
    'eng_vol' => 'required',
    'category_id' => 'required',
    'power' => 'required'
  ];
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
    $validated = $request->validate(self::CAR_VALIDATOR);
    $car = Car::create(
      [
        'name' => $validated['name'],
        'year' => $validated['year'],
        'power' => $validated['power'],
        'eng_vol' => $validated['eng_vol'],
        'fuel' => $validated['fuel'],
        'price' => $validated['price'],
        'image_1' => $filename_1,
        'category_id' => $validated['category_id']
      ]);
    return redirect()->back();
  }


  public function edit(Car $car)

  {
    $categories = Category::all();
    return view('car.edit', compact('car', 'categories'));
  }

  public function update(Car $car, Request $request)
  {
    $filename_1 = '';
    if ($request->hasFile('image_1')) {
      $filename_1 = $request->getSchemeAndHttpHost . '/images/' . time() . '.' . $request->image_1->extension();
      $request->image_1->move(public_path('/images/'), $filename_1);
    }
    $data = request()->validate([
      'name' => 'string',
      'year' => 'string', //данные которые придут с форм добавления и типы данных
      'power' => 'string',
      'eng_vol' => 'string',
      'fuel' => 'string',
      'price' => 'string',
      'image_1' => 'string',
      'category_id' => 'string'
    ]);
    $car->update($data);
    return redirect()->route('admin.index', $car->id);
  }
  public function destroy(Car $car)
  {
    $car->delete();
    return redirect()->route('admin.index');
  }
}
