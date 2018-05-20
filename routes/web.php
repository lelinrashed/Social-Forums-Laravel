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
    return view('welcome');
});

Route::get('/discuss', function () {
    return view('discuss');
});

Auth::routes();

Route::get('/forum', 'ForumsController@index')->name('forum');
Route::get('/{provider}/auth', 'SocialsController@auth')->name('social.auth');
Route::get('/{provider}/redirect', 'SocialsController@auth_callback')->name('social.callback');

Route::get('/discussion/{slug}', 'DiscussionsController@show')->name('discussion');
Route::get('channel/{slug}', 'ForumsController@channel')->name('channel');

Route::group(['middleware' => 'auth'], function () {

    Route::resource('channels', 'ChannelsController');

    Route::get('/discussion/create/new', 'DiscussionsController@create')->name('discussion.create');
    Route::post('/discussion/store', 'DiscussionsController@store')->name('discussion.store');
    Route::post('/discussion/reply/{id}', 'DiscussionsController@reply')->name('discussion.reply');

    Route::get('/reply/like/{id}', 'RepliesController@like')->name('reply.like');
    Route::get('/reply/unlike/{id}', 'RepliesController@unlike')->name('reply.unlike');

    Route::get('/discussion/watch/{id}', 'WatchersController@watch')->name('discussion.watch');
    Route::get('/discussion/unwatch/{id}', 'WatchersController@unwatch')->name('discussion.unwatch');

    Route::get('/discussion/best/reply/{id}', 'RepliesController@best_answer')->name('discussion.best.answer');

});