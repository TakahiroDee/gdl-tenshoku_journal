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
Route::get('/about', 'TopController@about');

/* Ranking page */
Route::get('/ranking', 'RankingController@topIndex');

Route::get('/ranking/site', 'RankingController@siteIndex');
Route::get('/ranking/agent', 'RankingController@agentIndex');
Route::get('/ranking/haken', 'RankingController@hakenIndex');
Route::get('/ranking/woman', 'RankingController@womanIndex');
Route::get('/ranking/itweb', 'RankingController@itwebIndex');
Route::get('/ranking/{service_type}/{service_id?}', 'RankingController@show');

/* Search page */
Route::get('/search', 'SearchController@index');
Route::post('/search', 'SearchController@search');
Route::get('/search/condition', 'SearchController@customIndex');
Route::get('/search/service/{service_id}' ,'SearchController@getIndexByServiceId');

Route::get('/search/job/{pathname}', 'SearchController@getIndexByJobBigCode');
Route::get('/search/job/{pathname}/{job_code_full}' ,'SearchController@getIndexByJobFullCode');
Route::get('/search/job/{pathname}/{job_code_full}/{rqmt_id}', 'SearchController@showByJobCode');

Route::get('/search/area/{block_pathname}' ,'SearchController@getIndexByBlockCode');
Route::get('/search/area/{block_pathname}/{area_pathname}' ,'SearchController@getIndexByAreaCode');
Route::get('/search/area/{block_pathname}/{area_pathname}/{rqmt_id}', 'SearchController@showByAreaCode');
