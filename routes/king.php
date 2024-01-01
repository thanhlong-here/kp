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

