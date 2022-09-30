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
                <form action="/loginEntreprise" method="POST" id="signup-form" class="signup-form">
                    @csrf
                    <h2 class="form-title">Connexion</h2>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Votre Email" value="{{ old('email') }}" required/>
                        @error('email')
                            <p class="message_error"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Mot de Passe"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        @error('password')
                            <p class="message_error"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>
@endsection