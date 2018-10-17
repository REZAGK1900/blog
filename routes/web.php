<?php

use App\Post;
use App\Tag;

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

    Route::group(['prefix' => '/'], function () {

        Route::get('/', 'AdminController@index_admin')->name('index_admin');

        Route::get('post', function(){
            $user = Post::with(['users'])->get();
            dd($user);
        });

        Route::get('post-tags', function (){
            $tags = Tag::with(['post'])->get();
            dd($tags);
        });

        /*
         * Route AdminController
         */
        Route::group(['prefix' => 'admin'], function () {
            Route::get('/', 'AdminController@index')->name('admin');

            /*
             * Posts Menu
             */
            Route::get('posts', 'AdminController@posts')->name('posts');

            Route::get('tags', 'AdminController@tags')->name('tags');

            Route::group(['prefix' => 'post'], function (){
                Route::get('create', 'AdminController@post')->name('createPost');
                Route::post('create', 'AdminController@insertPost')->name('insertPost');
                Route::get('draft', 'AdminController@draftPost')->name('draftPost');
            });

            /*
             * Categories
             */
            Route::group(['prefix' => 'categories'], function(){
                Route::get('/', 'AdminController@ctegories')->name('categories');
                Route::get('/create', 'AdminController@createCategory')->name('crateCategory');
                Route::get('/{id}');
            });


            /*
             * Pages Menu
             */
            Route::get('page/create', 'AdminController@createPage')->name('createPage');

            Route::get('pages', 'AdminController@pages')->name('pages');


           /*
            * Comments Menu
            */
            Route::get('comments', 'AdminController@comments')->name('comments');

           /*
            * Site Setting
            */
            Route::get('setting', 'SettingController@index')->name('setting');
            Route::post('setting', 'SettingController@update')->name('updateSetting');

            /*
             * Upload
             */
            Route::get('upload', 'AdminController@upload')->name('upload');
            Route::post('upload', 'AdminController@uploadFile')->name('fileUpload');


//            Route::get('{id}/delete', 'AdminController@delete')->name('delete_post');
//
//            Route::get('create/post', 'AdminController@postForm')->name('form_post');
//
//            Route::post('create/post', 'AdminController@create')->name('create_post');
//
//            Route::get('{id}/edit', 'AdminController@showPost')->name('show_post');
//
//            Route::post('{id}/edit', 'AdminController@updatePost')->name('update_post');

        });

    });
