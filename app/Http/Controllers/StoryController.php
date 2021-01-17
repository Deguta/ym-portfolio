<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        
        //viewを表示
        return view('story.index');
    }
}
