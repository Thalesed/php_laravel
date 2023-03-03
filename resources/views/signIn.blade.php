@extends('layouts.main')

@section('title', 'Home')

@section('content')

<h2>Sign In</h2>

<form action="/enter" method="POST">
    @csrf
    <div>
        <label for="user">Usuário</label>
        <input type="text" id="user" name="user">
    </div>
    <div>
        <label for="pass">Senha</label>
        <input type="password" id="pass" name="pass">
    </div>
    <input type="submit" value="Entrar" class="btn btn-primary">
</form>

@endsection