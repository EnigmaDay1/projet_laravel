@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>{{ $project->name }}</h2></div>
                    <div class="panel-body">

                        @if ( !$project->tasks->count() )
                            Votre liste n'a pas de tâches.
                        @else
                            <ul>
                                @foreach( $project->tasks as $task )
                                    <li>
                                        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $project->slug, $task->slug))) !!}

                                        {!! link_to_route('projects.tasks.edit', 'Modifier', array($project->slug, $task->slug), array('class' => 'btn btn-info')) !!}
                                        {!! Form::submit('Supprimer', array('class' => 'btn btn-danger')) !!}

                                        {{ $task->name }} - {{ $task->date }}

                                        @if($task->completed =='1')
                                            <input type="checkbox" disabled="disabled" checked />
                                            @else
                                            <input type="checkbox" disabled="disabled" />
                                            @endif

                                        {!! Form::close() !!}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        <p>
                            {!! link_to_route('projects.index', 'Retour aux listes') !!} |
                            {!! link_to_route('projects.tasks.create', 'Créer une tâche', $project->slug) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection