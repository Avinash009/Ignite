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

Route::get('/', function () {
    return view('index');
});

// Authentication Routes...
$this->get('page/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('/page/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/category/create', [

    'uses' => 'CategoriesController@create',
    'as' => 'category.create'
]);

Route::post('/category/store', [
    'uses' => 'CategoriesController@store',
    'as' => 'category.store'
]);

Route::get('/tag/create', [

    'uses' => 'TagsController@create',
    'as' => 'tag.create'
]);

Route::post('/tag/store', [
    'uses' => 'TagsController@store',
    'as' => 'tag.store'
]);

Route::get('/post/create', [

    'uses' => 'PostsController@create',
    'as' => 'post.create'
]);
