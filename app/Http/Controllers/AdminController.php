<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use App\Models\Order;


class AdminController extends Controller
{
    public function index($category_id = 0)
    {   
        $categories = Category::get();
        $cars = Car::latest();
        $orders=Order::All();
        
        if($category_id){
            $cars->where('category_id', $category_id);
        }

        return view('admin.show', [
            'categories'=> $categories,
            'cars'=>$cars->paginate(6),
            'orders'=>$orders
        ], compact('orders'));
    }

}