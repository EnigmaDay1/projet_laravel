@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Listes de tâches</h2></div>
                    <div class="panel-body">

                        @if ( !$projects->count() )
                            Vous n'avez pas de listes de tâches
                        @else
                            <ul>
                                @foreach( $projects as $project )

                                    <?php
                                    $tachesCompletion = 0;
                                    $tachesNombre = 0;
                                    ?>

                                    @foreach( $project->tasks as $task )
                                        @if($task->completed == '1')
                                            <?php
                                            $tachesCompletion = $tachesCompletion+1;
                                            ?>
                                        @endif
                                        <?php
                                        $tachesNombre = $tachesNombre+1;
                                        ?>
                                    @endforeach

                                    <li>
                                        <?php
                                        $date = new DateTime( $project->created_at );
                                        ?>
                                        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}

                                            {!! link_to_route('projects.edit', 'Modifier', array($project->slug), array('class' => 'btn btn-info')) !!}
                                            {!! Form::submit('Supprimer', array('class' => 'btn btn-danger')) !!}

                                            <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>  - {{ $project->description }} - {{ $date->format('d/m/Y') }} - tâches accomplies {{ '('.$tachesCompletion.'/'.$tachesNombre.')' }}

                                        {!! Form::close() !!}
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        <p>
                            {!! link_to_route('projects.create', 'Créer une liste') !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection