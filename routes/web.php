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
    return view('home');
});
Route::get('/photography', function () {
    return view('photo');
});
Route::get('/resume', function () {
    return view('rsmr');
});

Route::get('/projects', function () {
    return view('projects.projects');
});

Route::get('/about',function(){
    return view('/about');
});

Route::get('/resources', function () {
    return view('rsc');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/wip', function () {
    return view('wip');
});


