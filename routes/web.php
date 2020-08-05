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

Route::get('/', 'HomePageController@index')->name('home.index');
Route::get('show/{productId}', 'ProductController@show')->name('product.show');
Route::get('products/{categoryId}', 'ProductController@index')->name('product.index');

Route::get('admin/product', 'Admin\AdminProductController@index')
->name('product.admin.index')->middleware('auth');
Route::get('admin/product/show', 'Admin\AdminProductController@show')
->name('product.admin.show');


Route::get('cart', 'CartController@index')->name('cart.index');
Route::post('cart/add/{productId}', 'CartController@store')->name('cart.store');
Route::post('cart/update', 'CartController@update')->name('cart.update');
Route::get('cart/destroy', 'CartController@destroy')->name('cart.destroy');

Route::get('admin', 'Admin\AdminController@index')->name('admin.index')->middleware('auth');

Route::get('admin/product/create', 'Admin\AdminProductController@create')
->name('product.create')->middleware('auth');
Route::post('admin/product/store', 'Admin\AdminProductController@store')
->name('product.store');
Route::get('admin/product/edit/{product}', 'Admin\AdminProductController@edit')
->name('product.edit');
Route::post('admin/product/update{product}', 'Admin\AdminProductController@update')->name('product.update');
Route::get('admin/product/destroy/{product}', 'Admin\AdminProductController@destroy')->name('product.destroy');

Route::get('admin/category/create', 'Admin\AdminCategoryController@create')
->name('category.create')->middleware('auth');
Route::post('admin/category/store', 'Admin\AdminCategoryController@store')->name('category.store');
Route::get('admin/category/edit/{categoryId}', 'Admin\AdminCategoryController@edit')->name('category.edit');
Route::post('admin/category/update/{categoryId}', 'Admin\AdminCategoryController@update')->name('category.update');
Route::get('admin/category/destroy/{categoryId}', 'Admin\AdminCategoryController@destroy')->name('category.destroy');

Route::get('feedback/{productId}', 'FeedbackController')->name('feedback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
