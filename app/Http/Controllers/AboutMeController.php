<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        //フォーム入力画ページのviewを表示
        return view('about_me.index');
    }
}
