@extends('components.layouts')
@section('head')
    <link rel="stylesheet" href="css/entreprise/ajout.css">
@endsection

@section('content')
     <article>
        <div>
            <form action="{{ route('people.scope') }}" method="post">
            @csrf
                <input type="number" name="id" id="id">
                <button type="submit">Valider</button>
            </form>
        </div>
        <div>
            @if (isset($usr))
                <p>name : {{ $usr->name }}</p>
                <p>grade : {{ $usr->grade }}</p>
                <p>id : {{ $usr->id }}</p>
                <a href="{{ route('entreprise.scope', $usr->id) }}">Valider</a>
            @else
                <p>Vous cherchez quelqu'un ?</p>
            @endif
        </div>
     </article>
@endsection