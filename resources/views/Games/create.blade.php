@extends('Games.form')
@section('formName', 'Crear Juego')
@section('action')
    action="{{ route('games.store') }}"
@endsection
