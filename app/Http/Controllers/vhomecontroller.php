<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vhomecontroller extends Controller
{
   
    public function index(){

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

}

}
