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
#register
Route::get('register', ['as' => 'xv.register', 'uses' => 'Auth\RegisterController@index']);

#about
Route::get('about', ['as' => 'xv.about', 'uses' => 'About\AboutController@index']);

//user
Route::group(['prefix' => 'user'], function(){
    #register
    Route::get('activity/{userId?}', ['as' => 'xv.user.activity.get', 'uses' => 'User\Activity\ActivityController@index']);

    #friend
    Route::get('friend/{userId?}', ['as' => 'xv.user.friend.get', 'uses' => 'User\Friend\FriendController@index']);

    #image
    Route::get('image/{userId?}', ['as' => 'xv.user.image.get', 'uses' => 'User\Image\ImageController@index']);

    #article
    Route::get('article/{userId?}', ['as' => 'xv.user.article.get', 'uses' => 'User\Article\ArticleController@index']);
});

//article
Route::group(['prefix' => 'article'], function(){
    #register
    Route::get('/{articleAlias?}', ['as' => 'xv.article.get', 'uses' => 'Article\ArticleController@index']);
});
#home
Route::get('/{provinceId?}/{districtId?}/{keywordId?}', ['as' => 'xv.home', 'uses' => 'Home\HomeController@index']);