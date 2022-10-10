@extends('components.layouts')
@section('head')
    <link rel="stylesheet" href="css/post.css">
@endsection

@section('content')
    <article>
        <div class="img">
            <img src="/images/exemple2.jpg" alt="img" id="img">
        </div>
        <div class="bas">
            <div class="titre">
                <strong> {{ $post->entreprise->name }} </strong>
            </div>
            <div class="text">
                <p> {{ $post->reduction }} </p>
            </div>
        </div>
    </article>
    
@endsection
