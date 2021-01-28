<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layouts.boolean')

@section('content')
  <ul>
    <li><span>id utente: </span>{{ $user->id}}</li>
    <li><span>nome: </span>{{ $user->first_name }}</li>
    <li><span>cognome: </span>{{ $user->last_name }}</li>
    <li><span>genere: </span>{{ $user->gender }}</li>
    <li><span>email: </span>{{ $user->email }}</li>
  </ul>
@endsection
