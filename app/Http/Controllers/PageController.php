<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function blog()
    {
        return view('pages.blog');
    }
    public function teachers()
    {
        return view('pages.teachers');
    }
    public function course()
    {
        return view('pages.course');
    }
    public function pricing()
    {
        return view('pages.pricing');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
