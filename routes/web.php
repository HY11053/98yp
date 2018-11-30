<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//前台界面
Route::group(['domain' => 'm.98yinpin.com'], function () {
    Route::get('/','Mobile\IndexController@Index');
    Route::get('{path}/{id}.html','Mobile\ArticleController@getArticle')->where('id', '[0-9]+')->name('articles');
    Route::post('sprodlist/all/','Mobile\SeacrhController@SeacrhBrand');
    Route::get('sprodlist/all/','Mobile\SeacrhController@SeacrhBrand');
    Route::post('phone/complate/list/','Mobile\PhoneController@ComplateBrands');
    Route::get('{path}/page/{page}','Mobile\ListNewsController@listNews')->where('path', '[a-zA-Z0-9/_]+')->name('newspagelist');
    Route::get('{path}','Mobile\ListNewsController@listNews')->where('path','[a-zA-Z0-9/_]+')->name('newslist');
});
Route::get('/','Frontend\IndexController@Index');
Route::get('{path}/{id}.html','Frontend\ArticleController@getArticle')->where('id', '[0-9]+')->name('articles');
Route::post('sprodlist/all/','Frontend\SeacrhController@SeacrhBrand');
Route::get('sprodlist/all/','Frontend\SeacrhController@SeacrhBrand');
Route::post('phone/complate/list/','Frontend\PhoneController@ComplateBrands');
Route::get('{path}/page/{page}','Frontend\ListNewsController@listNews')->where('path', '[a-zA-Z0-9/_]+')->name('newspagelist');
Route::get('{path}','Frontend\ListNewsController@listNews')->where('path','[a-zA-Z0-9/_]+')->name('newslist');
Route::post('/phonecomplate/','Frontend\PhoneController@phoneComplate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
