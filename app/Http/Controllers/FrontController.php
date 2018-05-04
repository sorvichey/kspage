<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    public function company_category(){
        $al = $_GET['al'];
        if($al=='All')
        {
            $data['company_categories'] = DB::table('company_categories')
                ->where('active',1)
                ->orderBy('name', 'asc')
                ->paginate(50);
        }
        else{

            $data['company_categories'] = DB::table('company_categories')
                ->where('active',1)
                ->where('name', 'like', "{$al}%")
                ->orderBy('name', 'asc')
                ->paginate(50);
        }
        $data['al'] = $al;
        return view('company-categories', $data);
    }
    public function company_list($id){
        $data['companies'] = DB::table('companies')
            ->where('active',1)
            ->where('category_id', $id)
            ->orderBy('name', 'asc')
            ->paginate(30);
        $data['company_category'] = DB::table('company_categories')
            ->where('id', $id)
            ->where('active',1)
            ->first();
        return view('company-list', $data);
    }
    public function company_detail($id){
        $data['company'] = DB::table('companies')
            ->where('active',1)
            ->where('id', $id)
            ->first();
        $business_id = $data['company']->business_type;
        $category_id = $data['company']->category_id;
        $data['business_type'] = DB::table('business_types')
            ->where('id', $business_id)
            ->where('active',1)
            ->first();
        $data['company_category'] = DB::table('company_categories')
            ->where('id', $category_id)
            ->where('active',1)
            ->first();
        return view('company-detail', $data);
    }
    public function event_category(){
        $data['event_categories'] = DB::table('event_categories')
            ->where('active',1)
            ->orderBy('name', 'asc')
            ->get();
    
        $data['events'] = DB::table('events')
            ->where('active',1)
            ->orderBy('id', 'desc')
            ->paginate(16);
        return view('event-categories', $data);
    }
    public function event_list($id){
        $data['event_categories'] = DB::table('event_categories')
        ->where('active',1)
        ->orderBy('name', 'asc')
        ->get();

        $data['events'] = DB::table('events')
            ->where('active',1)
            ->where('event_category', $id)
            ->orderBy('id', 'desc')
            ->paginate(16);
        $data['event_category'] = DB::table('event_categories')
            ->where('id', $id)
            ->where('active',1)
            ->first();
        return view('event-list', $data);
    }
    public function event_detail($id){
        $data['event'] = DB::table('events')
            ->where('active',1)
            ->where('id', $id)
            ->first();
        $category= $data['event']->event_category;
        $data['event_category'] = DB::table('event_categories')
            ->where('id', $category)
            ->where('active',1)
            ->first();
        return view('event-detail', $data);
    }
}
