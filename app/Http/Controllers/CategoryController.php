<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Car;
use Storage;


class CategoryController extends Controller
{
  private const CAR_VALIDATOR = [
    'title' => 'required|max:50',
    'image' => 'required'];
  public function index()
  {
    $category = Category::all();

    return view('car.index', compact('category')); //передача переменной posts в view
  }


  public function create()
  {
    $categories = Category::all();
    return view('category.create', compact('categories'));
  }
  public function store(Request $request)
  {

    $filename = '';
    if ($request->hasFile('image')) {
      $filename = $request->getSchemeAndHttpHost . '/images/' . time() . '.' . $request->image->extension();
      $request->image->move(public_path('/images/'), $filename);
    }
    // Category::create($data);
    $validated = $request->validate(self::CAR_VALIDATOR);
    $category = Category::create(
      [
        'title' =>  $validated['title'],
        'image' => $validated['image']
      ]);
    return redirect()->back();
  }
  
  public function destroy(Category $category)
  {
    $category ->delete();
    return redirect()->route('admin.index');
  }
}

