<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        
        //viewを表示
        return view('about_me.index');
    }
}
