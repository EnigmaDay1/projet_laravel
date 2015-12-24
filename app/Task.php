<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = []; //empêche l'erreur MassAssignmentException

    public function project()
    {
        return $this->belongsTo('App\Project'); //relation du model Task: Plusieurs à un
    }
}
