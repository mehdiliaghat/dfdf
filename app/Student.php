<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function assignedcourses()
    {
        return $this->belongsToMany('App\Assignedcourse' ,'assignedcourse_student','student_id','assignedcourse_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function recordscores()
    {
        return $this->hasMany(Recordscore::class);
    }

}
