<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = []; //empêche l'erreur MassAssignmentException

    protected $fillable = ['id', 'user_id','name', 'slug']; // l'attribut name doit être "mass-assignable" IMPORTANT sinon bug lors de la création de liste

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


