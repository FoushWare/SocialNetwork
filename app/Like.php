<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    //set the relations for the posts and users

    public function user(){
        return $this->belongsTo('\App\User');
    }
    public function post(){
        return $this->belongsTo('\App\Post');
    }





}
