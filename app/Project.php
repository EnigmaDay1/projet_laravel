<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function tasks()
    {
        return $this->hasMany('App\Task'); //relation du model Project: Un à plusieurs
    }
}


