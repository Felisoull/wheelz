<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $categories = Category::all();

        return view('main', compact('cars', 'categories'));
    }

}