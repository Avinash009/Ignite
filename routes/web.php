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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/category/create', [

      'uses' => 'CategoriesController@create',
      'as'   =>'category.create'

    ]);

Route::get('/tag/create', [

      'uses' => 'TagsController@create',
      'as'   =>'tag.create'

    ]);

Route::get('/post/create', [

      'uses' => 'PostsController@create',
      'as'   =>'post.create'
      
    ]);