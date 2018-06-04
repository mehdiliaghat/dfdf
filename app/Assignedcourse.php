<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignedcourse extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function students()
    {
        return $this->
        belongsToMany('App\Student' ,'assignedcourse_student'
            ,'assignedcourse_id','student_id');
    }
    public function recordscores()
    {
        return $this->hasMany(Recordscore::class);
    }
    public function contents()
    {
        return $this->hasMany(content::class);
    }
}
