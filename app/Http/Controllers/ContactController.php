<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;


class ContactController extends Controller
{
    public function index()
    {

        return view('contact');
    }

}