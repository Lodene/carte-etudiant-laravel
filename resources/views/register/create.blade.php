@extends('components.layouts')
@section('head')
    <link rel="stylesheet" href="css/formLogin.css">
@endsection

@section('content')
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="/register">
                    @csrf
                        <h2 class="form-title">Créer votre compte </h2>
                        <div class="    ">
                            <input type="text" class="form-input" name="last_name" id="name" placeholder="Votre Nom" value="{{ old('last_name') }}"/>
                            <input type="text" class="form-input" name="first_name" id="prenom" placeholder="Votre Prénom" value="{{ old('first_name') }}"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Votre Email" value="{{ old('email') }}"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Mot de Passe"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeter votre Mot de Passe"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte les <a href="#" class="term-service">Conditions d'utilisation</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Valider"/>
                        </div>
                    </form>
                    @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                
            @endif
                    <p class="loginhere">
                        Vous avez déjà un compte ? <a href="/login" class="loginhere-link">Connectez-vous</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
@endsection