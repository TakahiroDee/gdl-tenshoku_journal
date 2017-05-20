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

/* Top page */
Route::get('/', 'TopController@index');

/* Ranking page */
Route::get('/ranking', 'RankingController@index');

Route::get('/ranking/site', 'SiteController@index');
Route::get('/ranking/site/{id}', 'SiteController@show');

Route::get('/ranking/itweb', 'ItwebController@index');
Route::get('/ranking/itweb/site/', 'ItwebController@getSiteIndex');
Route::get('/ranking/itweb/agent/', 'ItwebController@getAgentIndex');
Route::get('/ranking/itweb/{id}', 'ItwebController@show');

Route::get('/ranking/agent', 'AgentController@index');
Route::get('/ranking/agent/{id}', 'AgentController@show');

Route::get('/ranking/haken', 'HakenController@index');
Route::get('/ranking/haken/{id}', 'HakenController@show');

Route::get('/ranking/woman', 'WomanController@index');
Route::get('/ranking/woman/{id}', 'WomanController@show');

/* Search page */
Route::get('/search', 'SearchController@index');
Route::get('/search/{id}', 'SearchController@showJob');
