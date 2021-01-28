@extends('layouts.boolean')

@section('content')
  {{-- dd($users) --}}
    @foreach ($users as $user)
      <div class="users">
        <img src="{{ $user->image }}" alt="foto-profilo">
        <span>{{ $user->first_name }}</span>
        <span>{{ $user->last_name }}</span>
        <span>{{ $user->email }}</span>
        <a href="utenti/{{ $user->id }}">show info</a>
      </div>
    @endforeach
@endsection
