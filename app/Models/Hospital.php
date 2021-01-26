<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    public function reviews()
    {
        return $this->hasMany('App\Models\OnlineReviews')->latest(); //投稿を新しい順に表示させる
    }

}
