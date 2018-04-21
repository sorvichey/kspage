<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopOwnerController extends Controller
{

    public function index()
    {
        return view('shop-owners/index');
    }

    public function login(){
        return view('shop-owners/login');
    }

    public function register(){
        return view('shop-owners/register');
    }
}
