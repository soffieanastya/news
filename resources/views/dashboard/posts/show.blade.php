@extends('dashboard.layouts.main')

@section('container')
    <article>
        <h2 class="mt-5">{{ $post->title }}</h2>
        
        
        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my post</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf 
            <button  class="btn btn-danger" onclick="return confirm('are you sure to detele this post?')"><span data-feather="x-circle"></span>Delete</button>
        </form>

        <h5>{{ $post->author }}</h5>
        
        {!! $post->body !!}
    </article>
@endsection