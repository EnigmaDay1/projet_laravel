

@extends('app')

@section('content')
    <h2>Projects</h2>

    @if ( !$projects->count() )
        You have no projects
    @else
        <ul>
            @foreach( $projects as $project )
                <li>
                    <?php
                    $date = new DateTime( $project->created_at );
                    ?>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                    <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>  - {{ $project->description }} - {{ $date->format('d/m/Y') }}
                    (
                    {!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!},
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('projects.create', 'Create Project') !!}
    </p>
@endsection