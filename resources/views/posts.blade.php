@extends('components.layouts')
@section('head')
    <link rel="stylesheet" href="css/posts.css">
@endsection

@section('content')
    <div>
        <div>
            <h3> Liste des proms : </h3>
        </div>
        
            <div class="leTout">
                @foreach($posts as $post)
                    <a href="post/{{ $post->id }}">
                        @if ( count($posts) > 0)
                            <article>
                                <div class="img">
                                    <img src="images/exemple.jpg" alt="img" id="img_exemple">
                                </div>
                                <div class="titre">
                                    <h5>{{ $post->entreprise->name }} </h5>
                                </div>
                                <div class="text">
                                    <p> {{ $post->reduction }} </p>
                                </div>
                                                        </article>
                        @else
                            <p> Oups.... Il y a un petit problème, veuillez recharger la page !</p>
                        @endif
                    </a>
                @endforeach
                
            </div>
        

        
    </div>
@endsection
