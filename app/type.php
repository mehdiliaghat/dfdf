<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function contents()
    {

       return $this->hasMany('App\Content','content_id');
    }

}
