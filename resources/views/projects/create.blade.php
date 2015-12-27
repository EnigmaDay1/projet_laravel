@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Création de liste</h2></div>
                    <div class="panel-body">

                        {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
                        @include('projects/partials/_form', ['submit_text' => 'Créer la liste'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection