<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{

    protected $fillable=[
        'title','body', 'videoURL','number','viewCount'
    ];
}
