@extends('layouts.app')
@section('title', 'Inicio')
@section('description', "Aprende a programar, encuentra tutoriales útiles y reviews de tecnología en español")
@section('author', 'Eli')
@section('keywords', 'tecnologia, programacion, reviews, podcast, ingenieria') {{-- TODO: Custom per post --}}
@section('image', asset('storage/me.jpg'))
@section('twitter_username', '@carloselilopez') {{-- TODO: Custom per user --}}
@section('content')

    @include('includes.header', [
        'img' => asset('img/home-cheffy-bg.jpg'),
        'heading' => 'Bienvenido a Cheffy',
        'subheading' => 'Conoce todo sobre la aplicación.',
        'type' => 'site'
    ])

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{ route('post', ['slug' => $post->slug]) }}">
                        <h2 class="post-title">
                            {{ $post->header }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $post->subheader }}
                        </h3>
                    </a>
                    <p class="post-meta">Publicado {{ $post->created_at }}</p>
                </div>
                @endforeach
                <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Antiguos Posts &rarr;</a>
                    </li>
                </ul>

            </div>
        </div>

    </div>


    <hr>

@endsection
