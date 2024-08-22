<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function home ()
    {
        return view('home-page');
    }

    public function about () 
    {
        return view('some-page');
        
    }
    
    public function contact () 
    {
        return view('menu.contact');
        
    }

    public function document () 
    {
        return view('document');
    }

    public function login () 
    {
        return view('login');
    }

    public function image () 
    {
        return view('image');
    }

    public function album ()
    {
        return view('album');
    }
}