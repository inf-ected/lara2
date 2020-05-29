<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
// $tasks=[
//     "go to the store",
//     "go to the market",
//     "go to work"
// ];
// $var='<script>alert("!!!");</script>';


//     // return view('welcome',['tasks'=>$tasks,
//     // 'var'=>'<script>alert("!!!");</script>'
//     // ]);
// return view('welcome')->withTasks($tasks)->withVar($var);
// });

Route::get('/', 'PagesController@home');


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/about', function () {
    return view('about');
});

