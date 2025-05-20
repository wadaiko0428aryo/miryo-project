<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function my_page()
    {
        return view('myPage.my_page');
    }
    public function my_blog()
    {
        return view('myPage.my_blog');
    }
    public function my_event()
    {
        return view('myPage.my_event');
    }
    public function my_items()
    {
        return view('myPage.my_items');
    }
}
