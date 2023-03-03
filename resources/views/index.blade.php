@extends('layouts.main')

@section('title', 'Home')

@section('content')

<h2>Autenticação de Usuário</h2>

<a href="/login">
    <input type="button" class="btn btn-primary" value="Sign In">
</a>
<a href="/register">
    <input type="button" class="btn btn-primary" value="Register">
</a>
@endsection