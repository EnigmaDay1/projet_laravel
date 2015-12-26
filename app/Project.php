<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = []; //empêche l'erreur MassAssignmentException

    protected $fillable = ['name']; // l'attribut name doit être "mass-assignable"

    public function tasks()
    {
        return $this->hasMany('App\Task'); //relation du model Project: Un à plusieurs
    }

    /**
     * récupère le user qui possède la liste
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


