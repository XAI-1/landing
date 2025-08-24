<?php

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



Route::get('vhome', function(){
    $blogs = [
        [
            'title' => 'Title one',
            'body' => 'this is a body text',
            'status' => 1
        ],

        [
            'title' => 'Title two',
            'body' => 'this is a body text two',
            'status' => 0
        ],
        
        [
            'title' => 'Title three',
            'body' => 'this is a body text three',
            'status' => 1
        ],

        [
            'title' => 'Title four',
            'body' => 'this is a body text four',
            'status' => 0
        ],
      
    ];

    return view('vhome', compact('blogs')); 
});


Route::get('/home', function(){
    return view('home');
});


Route::get('/career', function(){
    return view('career');
});

Route::get('about', function(){
    return view('about');
});

Route::get('contact', function(){
    return view('contact');
});

Route::get('report', function(){
    return view('report');
});


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

