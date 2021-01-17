<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        
        //フォーム入力画ページのviewを表示
        return view('skill.index');
    }
}
