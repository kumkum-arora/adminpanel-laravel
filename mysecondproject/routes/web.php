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

Route::get('/', function () {
    return view('welcome');
});
// laravel crud oprations
Route::get('/login-page', 'App\Http\Controllers\IController@login_page');
Route::Post('/login-submit', 'App\Http\Controllers\IController@login_submit');
Route::get('/profile', 'App\Http\Controllers\IController@profile');
Route::get('/logout-user', 'App\Http\Controllers\IController@logout');
// add page
Route::get('/add', 'App\Http\Controllers\IController@add_page');
Route::Post('/form-submit', 'App\Http\Controllers\IController@form_submit');
Route::get('/profile', 'App\Http\Controllers\IController@displaydata');
Route::get('/delete-data/{id}', 'App\Http\Controllers\IController@deletedata');
Route::get('/edit-disp/{id}', 'App\Http\Controllers\IController@editdisp');
Route::post('/edit_form/{id}', 'App\Http\Controllers\IController@editdata');
Route::post('/search-record', 'App\Http\Controllers\IController@search');
// add category
Route::get('/addcategory', 'App\Http\Controllers\IController@display_addcategory');
Route::Post('/category-submit', 'App\Http\Controllers\IController@category_submit');
Route::get('/categorysummery', 'App\Http\Controllers\IController@displaycategory');
Route::get('/delete-category/{id}', 'App\Http\Controllers\IController@delete_category');
Route::get('/edit-category/{id}', 'App\Http\Controllers\IController@edit_categorydisplay');
Route::post('/editcategory-submit/{id}', 'App\Http\Controllers\IController@editcategory');
Route::post('/search-category', 'App\Http\Controllers\IController@search_category');
// show category in add product page
Route::get('/addproduct', 'App\Http\Controllers\IController@add_productpage');
Route::get('/addproduct', 'App\Http\Controllers\IController@selectcategory');
Route::get('/productcategory', 'App\Http\Controllers\IController@display_product_category');
// add product
Route::Post('/add-product', 'App\Http\Controllers\IController@add_product');
Route::get('/productcategory', 'App\Http\Controllers\IController@display_productsummery');
Route::get('/delete-product/{id}', 'App\Http\Controllers\IController@delete_product');
Route::get('/edit-product/{id}', 'App\Http\Controllers\IController@edit_productdisplay');
Route::post('/editproduct-submit/{id}', 'App\Http\Controllers\IController@editproduct');
Route::post('/search-product', 'App\Http\Controllers\IController@search_product');
Route::get('/change', 'App\Http\Controllers\IController@change');
Route::post('/password-submit', 'App\Http\Controllers\IController@update_password');
