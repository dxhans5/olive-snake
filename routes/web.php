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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
// Authentication routes...
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/funnels', 'FunnelController@showFunnels');
Route::get('/create-funnel', 'FunnelController@createFunnel');
Route::post('/create-funnel', 'FunnelController@saveFunnel');
Route::get('/funnel/{id}', 'FunnelController@showFunnel');

Route::get('/optin-links', 'OptinController@showOptinLinks');
Route::get('/create-optin-link', 'OptinController@createLink');
Route::post('/create-optin-link', 'OptinController@saveLink');
Route::get('/optin/{id}', 'OptinController@showOptin');

Route::get('/lists', 'ListController@showLists');
Route::get('/create-list', 'ListController@createList');
Route::post('/create-list', 'ListController@saveList');
