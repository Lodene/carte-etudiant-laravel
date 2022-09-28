@extends('components.layouts')
@section('head')
    <link rel="stylesheet" href="css/create.css">
@endsection

@section('content')
    <article>
        <div class="leTout">
            <h3> Register </h3>
            <form action="/register" method="POST">
                @csrf
                <div>
                    <label for="first_name">Nom</label>
                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" required>
                    @error('first_name')
                        <p class="message_error"> {{ $message }} </p>
                    @enderror
                </div>
                <div>
                    <label for="last_name">Prenom</label>
                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" required>
                    @error('last_name')
                        <p class="message_error"> {{ $message }} </p>
                    @enderror
                </div>
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
        </div>
    </article>
@endsection
