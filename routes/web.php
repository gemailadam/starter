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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/test1', function (){
   return view('welcome');
});

Route::get('/test2/{id}',function ($id){
    return $id;
})-> name('a');

Route::get('/test3/{id?}',function (){
    return 'how are you';
})-> name('b');

Route::get('first','Front\FirstController@showString');

Route::resource('third','ThirdController');

Route::get('any-name','ThirdController@getIndex');

Route::get('/landing', function() {
    return view('landing');
});
Route::get('/about',function (){
   return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
