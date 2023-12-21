<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;


class MapController extends Controller
{
    public function index()
    {

        return view('map');
    }

}