<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function types()
    {

       return $this->belongsTo('App\Type' ,'type_id');
    }

    public function Assignedcourses()
    {
        return $this->belongsTo(Assignedcourse::class);
    }
}
