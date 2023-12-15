<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Car;
use Storage;


class CategoryController extends Controller
{
  private const BB_VALIDATOR = [
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

    $category = Category::create(
      [
        'title' => $request->title,
        'image' => $filename
      ]);
    return redirect()->back();
  }
}

