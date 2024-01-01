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


Auth::routes();

Route::post('login/firebase', 'Auth\FirebaseController@login')->name('firebase.login');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware('auth')->group(function () {
    
    Route::get('{user}/orders', 'Auth\PageController@order')->name('auth.orders');
    Route::get('{user}/favorites', 'Auth\PageController@favorites')->name('auth.favorites');
    Route::get('{user}/comments', 'Auth\PageController@favorites')->name('auth.comments');
    Route::get('{user}/notifies', 'Auth\PageController@notify')->name('auth.notifies');

    Route::get('{user}/inbox', 'Auth\PageController@inbox')->name('auth.inbox');

    Route::get('{user}/rewards', 'Auth\PageController@reward')->name('auth.rewards');
    Route::get('{user}/transactions', 'Auth\PageController@transactions')->name('auth.transactions');
    Route::get('{user}/settings', 'Auth\PageController@setting')->name('auth.settings');


    Route::get('{user}/join', 'Auth\PageController@join')->name('auth.join');
    Route::get('{user}/profile', 'Auth\PageController@profile')->name('auth.profile');

    Route::post('order/quick/{product}', 'Auth\OrderController@quick')->name('auth.order.quick');
    Route::put('order/pay/{order}', 'Auth\OrderController@pay')->name('auth.order.pay');
    Route::put('order/request/{order}', 'Auth\OrderController@request')->name('auth.order.request');
    Route::get('order/{case}/{order}', 'Auth\OrderController@case')->name('auth.order.case');


    Route::post('auth/profile/{freelancer}/update', 'Auth\ProfileController@update')->name('auth.profile.update');
    
    Route::get('chat','Auth\ChatController@chat' )->name('auth.chat');

    Route::get('chat/{user}/with/{with}','Auth\ChatController@with')->name('auth.chat.with');
});
