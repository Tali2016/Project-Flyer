<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'flyer_photos';

    protected $fillable = ['photo'];
    public function flyer(){
        //A Photo belongs to a flyer
    return $this->belongsTo('App\Flyer');
    }

}
