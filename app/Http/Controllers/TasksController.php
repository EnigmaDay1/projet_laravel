<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\Task;
use Input;
use Redirect;

class TasksController extends Controller
{
    protected $rules = [
        'name' => ['required', 'min:3'],
        'slug' => ['required'],
    ];

    public function __construct()
    {
        $this->middleware('auth'); //l'utilisateur doit être connecté pour effectuer une action sur le contrôlleur Taches
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tasks.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        return view('tasks.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Project $project, Request $request)
    {
        $this->validate($request, $this->rules); //vérifie les règles avant de créer la tâche

        $input = Input::all();
        $input['project_id'] = $project->id;

        Task::create( $input );

        return Redirect::route('projects.show', $project->slug)->with('message', 'Tâche créée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Task $task)
    {
        return view('tasks.show', compact('project', 'task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Task $task)
    {
        return view('tasks.edit', compact('project', 'task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, Task $task, Request $request)
    {
        $this->validate($request, $this->rules); //vérifie les règles avant de modifier la tâche

        $input = array_except(Input::all(), '_method');
        $task->update($input);

        return Redirect::route('projects.show', $project->slug)->with('message', 'Tâche mise à jour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, Task $task)
    {
        $task->delete();

        return Redirect::route('projects.show', $project->slug)->with('message', 'Tache supprimée.');
    }
}
