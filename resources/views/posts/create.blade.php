@if (session('logged_in_and_trying_to_access_register_url'))
    <div class="alert alert-warning text-center" role="alert">
        {{ session('logged_in_and_trying_to_access_register_url') }}
    </div>
@endif

@extends('layouts.app')

@section('content')
    <div class="col-md-8 blog-main">
        <h1>Publish a post</h1>
        <hr>
        
        <form method="POST" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title: </label>
                <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" >
                @if ($errors->has('title'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif<!-- TITLE ERROR MESSAGE -->
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" ></textarea>
                @if ($errors->has('body'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif<!-- TITLE ERROR MESSAGE -->
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>
        
        </form>
    </div><!--COL -->

@endsection
