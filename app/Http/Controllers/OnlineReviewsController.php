<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineReviewsController extends Controller
{
    public function index()
    {
        return view('online_reviews.top');
        return view('online_reviews.hospital');
    }
}

