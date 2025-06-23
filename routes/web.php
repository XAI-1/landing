<?php

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

Route::get('/home', function(){
    return view('home');
});




Route::get('/career', function(){
    return view('career');
});



Route::get('about', function(){
    return view('about');
});

Route::get("contact", function(){
    return view('contact');
});

Route::get('report', function(){
    return view('report');
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

