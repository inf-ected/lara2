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

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');




// Route::get('/projects', 'ProjectsController@index');

// Route::post('/projects', 'ProjectsController@store');

// Route::get('/projects/create', 'ProjectsController@create');
//PUT
//PATCH projects/id
//DELETE projects/id
//Route::patch('/projects/{pro}', 'ProjectsController@update');

//ресурсный подразумевает все методы и пут и патч и дел
//ресурсный контроллер соотв подразумевает медоты стор дестрой и тд
Route::resource('/projects','ProjectsController');


// Route::get('/contact', function () {
//     return view('contact');
// });


// Route::get('/about', function () {
//     return view('about');
// });

