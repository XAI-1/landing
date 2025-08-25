<?php

use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\careercontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\vhomecontroller;
use App\Http\Controllers\reportcontroller;
use App\Http\Controllers\homecontroller;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;


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



Route::get('vhome', [vhomecontroller::class, 'index']);
 
Route::get('home', [homecontroller::class, 'index']);

Route::get('/career',[careercontroller::class, 'index']);

Route::get('about', [aboutcontroller::class, 'index']); 

Route::get('contact', [contactcontroller::class, 'index']);

Route::get('report', [reportcontroller::class, 'index']);

Route::fallback(function(){
    return "404";
});



// Route::get('report', function(){
//     return '<h1>This is the report page</h1><br><h2>Report all issues here<h2>';
// });

// Route::get("home", function(){
//     return '<h1>This is the home<h1>';
// });


// Route::get("home", function(){
//     return "<a href='".route('hello')."'>ABOUT</a>";
// });

// Route::group(['prefix' => 'customer'],function(){
//     Route::get("/", function(){
//         return"<h1>Customer List</h1>"; 
//     });

//     Route::get("/create", function(){
//         return"<h1>Customer Create</h1>";
//     });

//     Route::get("/show", function(){
//         return"<h1>Customer Show</h1>";
//     });
// });

