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


Route::resource('freelancers.orders', 'OrderController')->shallow();
//Route::resource('freelancers.customers', 'CustomerController')->shallow();
Route::resource('freelancers.products', 'ProductController')->shallow();

Route::resource('freelancer.edus', 'FreelancerEduController')->shallow();
Route::resource('freelancer.certs', 'FreelancerCertController')->shallow();
Route::resource('freelancer.expes', 'FreelancerExpeController')->shallow();



/****Page Web*****/
//Route::get('/db','Web\PageController@db')->name('db');

Route::get('/', 'Web\PageController@home')->name('home');
Route::get('/search', 'Web\PageController@search')->name('search');

Route::get('/king', 'Web\PageController@king')->name('king');
Route::get('/request', 'Web\PageController@request')->name('request');
Route::get('/{pretty}', 'Web\PageController@page')->name('page');


/*

Route::get('/{type}/{category}','ShowController@category')->name('category');
Route::get('/{type}/{category}/{post}','ShowController@post')->name('post');
*/