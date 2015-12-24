<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = []; //empêche l'erreur MassAssignmentException

    public function tasks()
    {
        return $this->hasMany('App\Task'); //relation du model Project: Un à plusieurs
    }
}


