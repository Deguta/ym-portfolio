<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnlineReviews;
use App\User;
use Illuminate\Support\Facades\DB;//クエリビルダでDBに保存されているものを表示させる。また、ファサードでvendorフォルダ laravel framerowk illuminateの中に格納しているクラスを呼び出している。

class OnlineReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
        return view('online_reviews.hospital_list');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $names = DB::table('users')
        ->select('name')
        ->get();
        $reviews =DB::table('online_reviews')
        ->select('title','text')
        ->get();
        return view('online_reviews.create',compact('reviews','names'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new OnlineReviews;
        $review->user_id = $request->user()->id;
        $review->title = $request->input('title');
        $review->text = $request->input('text');

        // dd($title,$text);

        $review->save();
        return redirect()->route('online_reviews.create')
;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = OnlineReviews::find($id);
        return view('online_reviews.show',compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
