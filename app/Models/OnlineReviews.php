<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnlineReviews extends Model
{
    protected $fillable = [
        'title','text',
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
