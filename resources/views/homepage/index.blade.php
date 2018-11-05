

@extends('layouts.app')

@section('content')

    <div class="col-md-8 blog-main">
            
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Posts
        </h3>
@foreach ($post as $post)
        <div class="blog-post">
            <h2 class="blog-post-title">
                <a href="/post/{{ $post->id }}" id="post-title">{{ $post->title }}</a>
            </h2>
            <p class="blog-post-meta">Post on {{ $post->created_at->toFormattedDateString() }} by {{ $post->user->name }}
            <p>{{ $post->body }}</p>
            <hr>
        </div><!-- /.blog-post -->
@endforeach
    </div><!-- /.blog-main -->

@endsection