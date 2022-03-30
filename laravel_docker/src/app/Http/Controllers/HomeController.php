<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('frontend.index');
    }
    public function category()
    {
        return view('frontend.category');
    }
    public function product()
    {
        return view('frontend.product');
    }
}
