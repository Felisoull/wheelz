<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    private const CAR_VALIDATOR = [
        'quantity' => 'required|max:50',
        'car_id' => 'required'
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $cars = Car::all();
        $orders = Order::all();
        return view('user.index',
            ['orders' => Auth::user()->order()->latest()->get()]
            , compact('orders', 'cars'));


    }

}

