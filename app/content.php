<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }
}
