@extends('layouts.header')

@section('content')
    <article>
        <h2 class="mb-5">{{ $post->title }}</h2>
        
        
        <p>By. <a href="/blog?user={{ $post->user->username }}">{{ $post->user->name }}</a>
           in <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>


        <h5>{{ $post->author }}</h5>
        
        {!! $post->body !!}
    </article>

    <a href="/blog" class="d-block mt-3">back to blog</a>
    
@endsection