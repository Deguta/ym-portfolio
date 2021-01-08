<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm()
    {
        return view('contact.confirm');
    }

    public function process()
    {
        
    }

    public function complete()
    {
        return view('contact.complete');
    }
}
