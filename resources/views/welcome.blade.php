@extends('app')

@section('content')
    <h2>
        Bienvenue
    </h2>
    @if (Auth::guest())
        Pour utiliser ce site, vous devez vous créer un compte ou vous connecter.
    @else
        Cliquer sur le bouton Home pour accéder à vos listes de tâches.
    @endif

@endsection