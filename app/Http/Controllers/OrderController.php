<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{

  private const CAR_VALIDATOR = [
    'quantity' => 'required|max:50',
    'car_id' => 'required'
  ];


  public function index()
  {   $cars=Car::all();
      $orders=Order::all();
      $context = ['orders' => Order::latest()->get()];
        return view('admin.orders', $context,  compact('orders', 'cars'));
  
  }


  public function destroy(Order $order)
  {
    $order->delete();
    return redirect()->route('order.index');
  }

}

