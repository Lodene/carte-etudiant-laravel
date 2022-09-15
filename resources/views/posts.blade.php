@extends('components.layouts')
@section('head')
    <link rel="stylesheet" href="css/posts.css">
@endsection

@section('content')
    <div>
        <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
            <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
                {{-- <x-category-dropdown /> --}}
            </div>
    
            <!-- Search -->
            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form method="GET" action="/">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
    
                    <input type="text"
                           name="search"
                           placeholder="Find something"
                           class="bg-transparent placeholder-black font-semibold text-sm"
                           value="{{ request('search') }}"
                    >
                </form>
            </div>
        </div>

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
