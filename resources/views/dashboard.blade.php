@extends('layouts.main')

@section('title', 'Home')

@section('content')

@auth
<p>{{ $user->name }}</p>
<form action="/logout" method="POST">
    @csrf
    <a href="/logout" onclick="event.PreventDefault();this.closest('form').submit();"> Sair</a>
</form>
@endauth

@endsection
