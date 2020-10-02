<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PagesController@index')->name('pages.index');
Route::get('/about', 'PagesController@about')->name('pages.about');
Route::get('/services', 'PagesController@services')->name('pages.services');
Route::get('/contact', 'PagesController@contact')->name('pages.contact');
Route::get('/buy', 'PagesController@buy')->name('pages.buy');
Route::get('/construction', 'PagesController@construction')->name('pages.construction');
Route::get('/makeoffer', 'PagesController@makeoffer')->name('pages.makeoffer');
Route::get('/sales', 'PagesController@sales')->name('pages.sales');
Route::get('/distress', 'PagesController@distress')->name('pages.distress');

Route::post('/requests', 'UserRequestController@store')->name('requests.store');

Route::get(
    '/login',
    function () {
        if (Auth::check())
            return redirect( route('backend.dashboard') );
        else
        return view('auth.login');
    }
)->name('login');

Route::get(
    '/register',
    function () {
        if (Auth::check())
            return redirect( route('backend.dashboard') );
        else
        return view('auth.register');
    }
)->name('register');

Route::post('/register', 'AuthController@register')->name('auth.register');
Route::post('/login', 'AuthController@login')->name('auth.login');
Route::post('/logout', 'AuthController@logout')->name('auth.logout');