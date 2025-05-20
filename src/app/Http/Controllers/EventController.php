<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function events_page()
    {
        return view('events_page');
    }

}
