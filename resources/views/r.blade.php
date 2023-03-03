@extends('layouts.main')

@section('title', 'Home')

@section('content')

<h2>Register</h2>


<form action="/signUp" method="POST" class="form-inline">
    @csrf

    <div>
        <label for="user">Usuário</label>
        <input type="text" id="user" name="user">
    </div>
    <div>
        <label for="email">Email  </label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="pass">Senha  </label>
        <input type="password" id="pass">
    </div>
    <div>
        <label for="cliente">Cliente:</label>
        <input class="form-check-input" type="radio" id="escola" name="cliente"><label for="escola">Escola</label></input>
        <input class="form-check-input" type="radio" id="fornecedor" name="cliente"><label for="fornecedor">Fornecedor</label></input>
    </div>
    <input type="submit" class="btn btn-primary" value="Registrar">

</form>

@endsection