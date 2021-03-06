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
Route::get('/job_history', function () {
    return view('jh');
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

Route::resource('/mail','Send_Mail');

//Route::get('/send', function(){
//    
//    Mail::send('mails.test', [], function ($message){
//        $message->to('goggy25@gmail.com', 'Goran')->subject('Welcome!');
//    });
//});


