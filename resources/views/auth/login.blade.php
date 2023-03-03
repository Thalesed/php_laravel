@extends('layouts.main')

@section('title', 'Home')

@section('content')

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email">Email</label>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <label for="password">Senha </label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <button class="btn btn-primary">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>

@endsection
