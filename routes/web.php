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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//admin route

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Backend\DeshboardController@index')->name('admin.dashboard');
   
});

// supplier Routes
route::get('supplier', 'Backend\SupplierController@index')->name('supplier');
route::get('supplier-create', 'Backend\SupplierController@create')->name('supplier-create');
route::post('supplier-store', 'Backend\SupplierController@store')->name('supplier-store');
Route::get('supplier-delete/{id}', 'Backend\SupplierController@destroy')->name('supplier-delete');
route::get('supplier-edit/{id}', 'Backend\SupplierController@edit')->name('supplier-edit');
route::post('supplier-update/{id}', 'Backend\SupplierController@update')->name('supplier-update');

//customer Routes
route::get('customer', 'Backend\CustomerController@index')->name('customer');
route::get('customer-create', 'Backend\CustomerController@create')->name('customer-create');
route::post('customer-store', 'Backend\CustomerController@store')->name('customer-store');
Route::get('customer-delete/{id}', 'Backend\CustomerController@destory')->name('customer-delete');
route::get('customer-edit/{id}', 'Backend\CustomerController@edit')->name('customer-edit');
route::post('customer-update/{id}', 'Backend\CustomerController@update')->name('customer-update');

//Category Routes
route::get('category', 'Backend\CategoryController@index')->name('category');
route::get('category-create', 'Backend\CategoryController@create')->name('category-create');
route::post('category-store', 'Backend\CategoryController@store')->name('category-store');
Route::get('category-delete/{id}', 'Backend\CategoryController@destroy')->name('category-delete');
route::get('category-edit/{id}', 'Backend\CategoryController@edit')->name('category-edit');
route::post('category-update/{id}', 'Backend\CategoryController@update')->name('category-update');

//Brands
route::get('brand', 'Backend\BrandsController@index')->name('brand');
route::get('brand-create', 'Backend\BrandsController@create')->name('brand-create');
route::post('brand-store', 'Backend\BrandsController@store')->name('brand-store');
Route::get('brand-delete/{id}', 'Backend\BrandsController@destroy')->name('brand-delete');
route::get('brand-edit/{id}', 'Backend\BrandsController@edit')->name('brand-edit');
route::post('brand-update/{id}', 'Backend\BrandsController@update')->name('brand-update');

// Unit 
route::get('unit', 'Backend\UnitController@index')->name('unit');
route::get('unit-create', 'Backend\UnitController@create')->name('unit-create');
route::post('unit-store', 'Backend\UnitController@store')->name('unit-store');
Route::get('unit-delete/{id}', 'Backend\UnitController@destroy')->name('unit-delete');
route::get('unit-edit/{id}', 'Backend\UnitController@edit')->name('unit-edit');
route::post('unit-update/{id}', 'Backend\UnitController@update')->name('unit-update');

//product
route::get('product', 'Backend\ProductController@index')->name('product');
route::get('product-create', 'Backend\ProductController@create')->name('product-create');
route::post('product-store', 'Backend\ProductController@store')->name('product-store');
Route::get('product-delete/{id}', 'Backend\ProductController@destroy')->name('product-delete');
route::get('product-edit/{id}', 'Backend\ProductController@edit')->name('product-edit');
route::post('product-update/{id}', 'Backend\ProductController@update')->name('product-update');
Route::get('product-stock', 'Backend\ProductController@product_stock')->name('product-stock');


// purchase route
route::get('purchase', 'Backend\PurchaseController@index')->name('purchase');
route::get('purchase-create', 'Backend\PurchaseController@create')->name('purchase-create');


Route::post('purchase-store', 'Backend\PurchaseController@store')->name('purchase-store');


Route::get('/autocomplete/fetch', 'Backend\PurchaseController@fetch')
        ->name('autocomplete.fetch');


Route::get('/autocomplete/prodcutStore', 'Backend\PurchaseController@prodcutStore')
        ->name('prodcutStore');


//Sell Route
route::get('sell', 'Backend\SellController@index')->name('sell');
route::get('sell-create', 'Backend\SellController@create')->name('sell-create');
Route::get('/sell-autocomplete/fetch', 'Backend\SellController@fetch')
        ->name('sell-autocomplete.fetch');
Route::get('/sell-autocomplete/prodcutStore', 'Backend\SellController@prodcutStore')
        ->name('sell-prodcutStore');
Route::post('sell-store', 'Backend\SellController@store')->name('sell-store');
