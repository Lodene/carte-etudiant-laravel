@extends('components.layouts')
@section('head')
    <link rel="stylesheet" href="css/entreprise/ajout.css">
@endsection

@section('content')
     <article>
        <div>
            @if (isset($usr))
                <h4>Etes vous sur que c'est bien lui ?</h4>
                <p> name : </p>
                <a href="{{ route('valider') }}">Valider</a>
            @else
                <p>Que faites vous sur cette page ?</p>
            @endif
        </div>
     </article>
@endsection