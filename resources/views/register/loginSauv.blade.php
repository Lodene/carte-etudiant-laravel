@extends('components.layouts')

@section('head')
    <link rel="stylesheet" href="css/login.css">
@endsection

@section('content')
    <main>
        <h3> Connexion </h3>
        <form action="/login" method="POST">
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                    <p class="message_error"> {{ $message }} </p>
                @enderror
            </div>
            <div>
                <label for="password">Mot de Passe</label>
                <input type="password" name="password" id="password" required>
                @error('password')
                    <p class="message_error"> {{ $message }} </p>
                @enderror
            </div>
            <div>
                <button type="submit">Valider</button>
            </div>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            
        @endif
        </form>
    </main>
@endsection
