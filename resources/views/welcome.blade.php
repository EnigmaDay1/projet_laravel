@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Bienvenue</h2></div>
                    <div class="panel-body">
                        @if (Auth::guest())
                            Pour utiliser ce site, vous devez vous créer un compte ou vous connecter.
                        @else
                            Cliquer sur le bouton Accueil pour accéder à vos listes de tâches.
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection