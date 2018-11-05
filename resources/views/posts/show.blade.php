@extends('layouts.app')

@section('content')

    <div class="col-md-8 blog-main">
        <div class="blog-post">
            <h1 class="blog-post-title"> {{ ($solo_post->title) }} </h1> 
            <p class="blog-post-meta">{{ $solo_post->user->name }} on {{ $solo_post->created_at->toFormattedDateString() }}</p>
            <p>{{ $solo_post->body }}</p>
        </div><!-- /.blog-post -->

        <hr>
       
        <ul class="list-group">
            @foreach ($solo_post->comments as $comment)
                <li class="list-group-item">
                    {{ $comment->body }}
                    <strong class="float-right">{{ $comment->created_at->diffForHumans() }}</strong>
                </li>
            @endforeach
        </ul>{{--Comments--}}

        <hr>

        <form method="post" action="/post/{{ $solo_post->id }}">
            @csrf
            <div class="form-group">
                <textarea name="body" id="body" class="form-control" placeholder="Add comment here"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Send" class="btn btn-primary my-2">
            </div>
        </form>{{--ADd Comments--}}

    </div>{{-- blog main --}}
@endsection
