@extends('layouts.header')

@section('content')

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/blog">
      @if (request('category'))
        <input type="hidden" name="category" value=" {{ request('category') }}">
      @endif

      @if (request('user'))
        <input type="hidden" name="user" value=" {{ request('user') }}">
      @endif

      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count())
    @foreach ($posts as $post)
      <article class="mb-5 border-bottom pb-4">
        <h2>
            <a href="/blog/{{ $post->slug }}"  class="text-decoration-none">{{ $post->title }}</a></h2>
        
        <p>By. <a href="/blog?user={{ $post->user->username }}">{{ $post->user->name }}</a>
           in <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        <h5>{{ $post->author }}</h5>
        <p>{{ $post->excerpt }}</p>

        <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read more</a>
      </article>    
    @endforeach

  @else
    <p class="text-ceter fs-4">No post found</p>
  @endif

  <div class="pagination justify-content-center">
    {{ $posts->links() }}
  </div>
  
@endsection
