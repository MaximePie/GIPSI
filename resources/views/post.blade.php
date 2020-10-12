@extends('layout')

@section('title', 'Articles')

@section('content')
    <div class="Post">
        <h1 class="Post__title">Articles et podcast</h1>
        <div class="Post__container">
            @foreach($posts as $post)
                <p>
                    {{$post->title}}
                    {{$post->url}}
                    {{$post->content}}
                </p>
            @endforeach
        </div>
    </div>
@endsection
