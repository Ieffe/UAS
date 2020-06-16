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

//Testing page
// Route::get('/blade', function () {
//     return view('welcome');
// });
// Route::get('/article', function () {
//     return view('page-template.article');
// });
// Route::get('/list', function () {
//     return view('page-template.lists');
// });

//For Home
Route::get('/', 'WebController@main');

Route::get('/home', 'WebController@main');



//CRUD Articles
Route::get('/crud/articles','ArticleController@index'); //view index page
Route::get('/crud/article/add','ArticleController@add'); //add article
Route::get('/crud/article/remove/{id}','ArticleController@remove'); //delete article
Route::post('/article/post','ArticleController@post'); //do the post
Route::get('/crud/article/edit/{id}','ArticleController@edit'); //edit article
Route::put('/crud/article/update/{id}','ArticleController@update');//remove article 

//Front View
Route::get('/article/{id}', 'WebController@article'); //readable article
Route::get('/article/search', 'WebController@search'); //search




// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
