<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',"FrontController@index");
Route::get('/login',"FrontController@login");
Route::get('/register',"FrontController@register");
Route::get('/product-list',"FrontController@product_list");
Route::get('/product-single',"FrontController@product_single");
Route::get('/cart',"FrontController@cart");
Route::get('/checkout',"FrontController@checkout");
Route::get('/contact',"FrontController@contact");
Route::get('/about',"FrontController@about");
Route::get('/shop-owner/login',"ShopOwnerController@login");
Route::get('/shop-owner/register',"ShopOwnerController@register");
Route::get('/shop-owner/shop',"ShopOwnerController@index");
Route::get('/school-list',"FrontController@school_list");
Route::get('/scholarship',"FrontController@scholarship");
Route::get('/company-category',"FrontController@company_category");
Route::get('/company-list/{id}',"FrontController@company_list");
Route::get('/company-detail/{id}',"FrontController@company_detail");
Route::get('/event-category',"FrontController@event_category");
Route::get('/event-list/{id}',"FrontController@event_list");
Route::get('/event/detail/{id}',"FrontController@event_detail");