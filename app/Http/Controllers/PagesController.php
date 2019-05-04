<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = ' - Strona główna';
        return view('pages.index')->with('title',$title);
    }

    public function urlopy()
    {
        $title = ' - Urlopy';
        return view('pages.urlopy')->with('title',$title);
    }
}
