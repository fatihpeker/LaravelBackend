<?php

use Illuminate\Support\Facades\Route;

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
//ProductController
Route::post('/product','ProductController@index')->name('product.index');
Route::post('/getCategory','ProductController@getCategory')->name('product.getCategory');
Route::post('/byCategory','ProductController@productByCategory')->name('product.productByCategory');

//CustomerController
Route::post('/customerSingUp','CustomerController@CustomerSingUp')->name('customer.singUp');
Route::post('/customerLogin','CustomerController@CustomerLogin')->name('customer.login');
Route::post('/addProductBasket','CustomerController@AddProductBasket')->name('customer.addProduct');
Route::post('/removeProductBasket','CustomerController@RemoveProductBasket')->name('customer.removeProduct');
Route::post('/showBasket','CustomerController@ShowBasket')->name('customer.showBasket');

//AdminController
Route::post('/adminLogin','AdminController@AdminLogin')->name('admin.adminLogin');
Route::post('/getAllCustomer','AdminController@GetAllCustomer')->name('admin.getAllCustomer');
Route::post('/addNewProduct','AdminController@AddNewProduct')->name('admin.addNewProduct');
Route::post('/removeProduct','AdminController@RemoveProduct')->name('admin.removeProduct');
Route::post('/updateProduct','AdminController@UpdateProduct')->name('admin.updateProduct');
Route::post('/addNewCategory','AdminController@AddNewCategory')->name('admin.addNewCategory');
Route::post('/removeCategory','AdminController@RemoveCategory')->name('admin.removeCategory');
Route::post('/updateCategory','AdminController@UpdateCategory')->name('admin.updateCategory');



Route::get('/', function () {
    return view('welcome');
});
Route::resource('photos', 'App');
