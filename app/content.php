<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function types()
    {
        return $this->hasMany(Type::class);
    }

    public function Assignedcourses()
    {
        return $this->belongsTo(Assignedcourse::class);
    }
}
