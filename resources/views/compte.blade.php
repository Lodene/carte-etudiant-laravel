@extends('components.layouts')
@section('head')
    <link rel="stylesheet" href="/css/compte.css">
@endsection

@section('content')
@if (auth()->check())
    <article>
        <?php session_start(); ?>
        <div>
            <p>Nom : {{ $_SESSION['usr']['nom'] }}</p>
            <p>Prénom : {{ $_SESSION['usr']['prenom'] }}</p>
            <p>Email : {{ $_SESSION['usr']['email'] }}</p>
            <p>id : {{ $_SESSION['usr']['id'] }}</p>
            <p>Possède la carte : <?php if($_SESSION['usr']['carte'] == 0){ echo 'Non';} else {echo'Oui'; } ?></p>
        </div>
        <div>
            @if ($_SESSION['usr']['carte'] == 1)
                
            @else
                <p>N'hésite pas à acheter ta carte pour profiter des promotions !</p>
            @endif
        </div>
    </article>
    @else
        <?php return redirect('/')->with('succes', 'connectez vous avant de pouvoir accéder à cette page'); ?>
    @endif
@endsection

