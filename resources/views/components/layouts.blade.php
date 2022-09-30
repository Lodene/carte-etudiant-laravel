<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/layouts.css">
    @yield('head')
</head>
<body>
    <header>
        <div class="menu">
            <x-category-User>
            </x-category-User>
        </div>
        <div class="titre">
            <h3><a href="/" class="link_titre">Ta Carte Etudiante </a></h3>
        </div>
        <div class="header_gauche">
            @if (auth()->check())
                <a href="/compte" class="connexion"><h4>Compte</h4></a>
                <h4 class="connexion"> / </h4>
                <a href="/deconnexion" class="connexion bleu"><h4>Se déconnecter</h4></a>
            @else
                <a href="/register" class="connexion"><h4>S'inscire</h4></a>
                <h4 class="connexion"> / </h4>
                <a href="/login" class="connexion bleu"><h4>Se connecter</h4></a>
            @endif
            
        </div>
    </header>
    @yield('content')
    

    @if (session()->has('succes'))
        <div>
            <p> {{session()->get('succes') }}</p>
        </div>    
    @endif
</body>
</html>