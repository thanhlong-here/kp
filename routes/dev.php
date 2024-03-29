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

Route::get('/', 'Dev\PageController@login')->name('dev.login');
Route::get('index', 'Dev\PageController@index')->name('dev.index');

Route::get('trans/{lang}', 'Dev\LangController@trans')->name('trans');

Route::post('trans/{alias}/{id}', 'Dev\LangController@save')->name('trans.save');

Route::post('avatar/change', 'Dev\AvatarController@change')->name('avatar.change');

Route::post('editor/imgupload', 'Dev\EditorController@imgUpload')->name('editor.imgupload');
Route::post('users/{user}/liked', 'Dev\LikeController@liked')->name('liked');

Route::post('search/{model}', 'Dev\SearchController@find')->name('search.find');
Route::post('search/{model}/clear', 'Dev\SearchController@clear')->name('search.clear');

Route::get('pages/index', 'PostController@page')->name('pages.index');
Route::get('products/all', 'ProductController@all')->name('products.all');
Route::get('orders/all', 'OrderController@all')->name('orders.all');

Route::get('{prefix}.categories', 'CategoryController@index')->name('categories.prefix');
Route::get('{prefix}.blocks', 'BlockController@index')->name('blocks.prefix');

Route::post('products/change/{product}', 'ProductController@change')->name('products.change');

Route::resources([
  'users'               =>  'UserController',
  'freelancers'         =>  'FreelancerController',
  'blocks'              =>  'BlockController',
  'posts'               =>  'PostController',
  'categories'          =>  'CategoryController',
  'medias'              =>  'MediaController',
  'forms'               =>  'FormController',
]);
Route::resource('forms.elements', 'FormElementController')->shallow();

Route::resource('user.contacts', 'ContactController')->shallow();
Route::resource('user.requests', 'PostRequestController')->shallow();