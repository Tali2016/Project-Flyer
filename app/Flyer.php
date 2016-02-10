<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    //A flyer is comprised of many photos
    public function photos(){
        return $this->hasMany('App\Photo');
    }
}
