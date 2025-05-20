<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class TopController extends Controller
{
    public function top_page()
    {
        return view('top_page');
    }


}
