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

Route::get('/', 'TopController@index');
Route::get('/ranking', 'RankingController@index');
Route::get('/ranking/site', 'SiteController@index');
Route::get('/ranking/site/{id}', 'SiteController@show');
Route::get('/ranking/itweb', 'ItwebController@index');
Route::get('/ranking/agent', 'AgentController@index');
Route::get('/ranking/haken', 'HakenController@index');
Route::get('/ranking/woman', 'WomanController@index');
Route::get('/search', 'SearchController@index');
