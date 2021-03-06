@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Modification de la tâche "{{ $task->name }}"</h2></div>
                    <div class="panel-body">

                        {!! Form::model($task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->slug, $task->slug]]) !!}
                        @include('tasks/partials/_form', ['submit_text' => 'Modifier la tâche'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection