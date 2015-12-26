<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Fournis aux méthodes du controller un objet plutôt qu'un ID
Route::model('tasks', 'Task');
Route::model('projects', 'Project');

// Permet d'avoir des URL comme /projects/ma-premiere-liste/tasks/acheter-lait plutôt que /projects/1/tasks/2
Route::bind('tasks', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});

//Ajout des ressources Project et Task
Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController'); //permet pour les tâches d'avoir un URL comme : /projects/1/tasks/3 (plutôt que /tasks/3)

// Routes pour la connexion
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Routes pour l'inscription
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

