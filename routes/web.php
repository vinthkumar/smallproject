<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstcontroll;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('first/{id}',[firstcontroll::class,'first']);

Route::get('first',[firstcontroll::class,'first']);

Route::get('second',[firstcontroll::class,'second']);

Route::post('projectssave',[firstcontroll::class,'save']);

Route::post('resumedata',[firstcontroll::class,'store']);

Route::get('index',[firstcontroll::class,'index']);


//  Route::get('projects', function(){
//     return view('thanks');
//     return 'this is sample page';
//  });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('home',function() {
    return 'welcome home';
});

Route::get('about' ,function(){
    return 'this is about page';
});

Route::get('contact',function(){
    return ' this is contact page';
});

