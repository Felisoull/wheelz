<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;


class AutoController extends Controller
{
    public function index($category_id = 0)
    {
        $categories = Category::get();
        $cars = Car::latest();
        
        if($category_id){
            $cars->where('category_id', $category_id);
        }

        return view('auto', [
            'categories'=> $categories,
            'cars'=>$cars->paginate(6)
        ]);
    }

}