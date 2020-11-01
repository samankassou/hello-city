@extends('layouts.app')

@section('title', 'About Us | '.config('app.name'))
@section('content')
    <p>Built with &hearts; by SAMANKASSOU FOULLA</p>
    <p><a href="{{ route('app_home') }}">Revenir à la page d'accueil</a></p>
@endsection
