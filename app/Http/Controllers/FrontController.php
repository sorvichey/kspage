<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function product_list(){
        return view('product-list');
    }

    public function product_single(){
        return view('product-single');
    }

    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function school_list(){
        return view('school-lists');
    }
    public function scholarship(){
        return view('scholarships');
    }
}
