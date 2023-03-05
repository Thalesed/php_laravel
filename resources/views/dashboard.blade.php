@extends('layouts.main')

@section('title', 'Home')

@section('content')

@auth
<p>{{ $user->name }}</p>
@endauth

@endsection
