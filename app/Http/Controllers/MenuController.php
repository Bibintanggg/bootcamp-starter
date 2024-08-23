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

    public function account ()
    {
        return view('account');
    }

    public function video ()
    {
        return view('video');
    }

    public function audio ()
    {
        return view('audio');
    }

    public function download ()
    {
        return view('download');
    }

    public function zipfile ()
    {
        return view('zipfile');
    }

    public function app ()
    {
        return view('app');
    }

    public function makalah ()
    {
        return view('makalah');
    }

    public function more ()
    {
        return view('more');
    }
}
