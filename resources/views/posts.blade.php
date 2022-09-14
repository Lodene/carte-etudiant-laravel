@extends('components.layouts')
@section('head')
    <link rel="stylesheet" href="css/posts.css">
@endsection

@section('content')
    <div>
        <div>
            <h3> Liste des proms : </h3>
        </div>
        
            <div>
                <p> {{ count($posts) }} </p>
                @foreach($posts as $post)
                <p> {{ $post }}  <p>
                    @if ({{ count($posts) }} > 0)
                        <article>
                            <img src="250x250" alt="img">
                        </article>
                    @else
                        <p> Oups.... Il y a un petit problème, veuillez recharger la page !</p>
                    @endif
                @endforeach
            </div>
        

        
    </div>
@endsection
