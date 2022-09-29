@extends('components.layouts')
@section('head')
    <link rel="stylesheet" href="css/posts.css">
    <script src="https://kit.fontawesome.com/834a2a8e7b.js" crossorigin="anonymous"></script>
    <script src="js/form.js"></script>
@endsection


@section('content')
    <div>
        <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
            <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
                {{-- <x-category-dropdown /> --}}
            </div>
            {{-- {{ dd($category) }} --}}
            <!-- Search -->
            <div class="search">
                <form method="GET" action="/posts">
                    <select name="category" id="categories" onchange="this.form.submit();">
                        <option value="">--Categories--</option>
                        @foreach ($categories as $item)
                        <?php $id = $item->id ?>
                            <option value="{{ $item->id }}"
                                <?php if(isset($_GET['category']) && $_GET['category'] == $id ) {echo "selected=selected"; } ?>>
                                {{ $item->name }}
                            </option>
                        @endforeach
                        {{-- @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif --}}
                    </select>
                    
                    <input type="text"
                           name="search"
                           placeholder="Vous cherchez quelque chose ?"
                           value="{{ request('search') }}"
                    >
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                
            </div>
        </div>
        <div class="leTout">
            @if (count($posts) != 0 )
                @foreach($posts as $post)
                    <a href="post/{{ $post->id }}" class="post">
                        <article>
                            <div class="img">
                                <img src="images/exemple.jpg" alt="img" id="img_exemple">
                            </div>
                            <div class="titre">
                                <h5 class="text-white">{{ $post->entreprise->name }} </h5>
                            </div>
                            <div>
                                <h6>{{ $post->category->name }}</h6>
                            </div>
                            <div class="text">
                                <p> {{ $post->reduction }} </p>
                            </div>
                        </article>
                    </a>
                @endforeach
            @else
                <p class="mess_error"> Le magasin "{{ request('search') }}" n'est pas encore partenaire de notre plateforme :'(</p>
            @endif

        </div>
    </div>
@endsection
