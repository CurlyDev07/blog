@extends('layouts.app')

@section('content')

<div class="col-sm-8">

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control {{ $errors->has('name')? ' is-invalid' : '' }}" required>
            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div><!-- Name -->
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control {{ $errors->has('email')? ' is-invalid' : '' }}" name="email" id="email" required>
                @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div><!-- Email -->

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control {{ $errors->has('password')? ' is-invalid' : '' }}" name="password" id="password" required>
                @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div><!-- Password -->

        <div class="form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
        </div><!-- Password -->

        <button type="submit" class="btn btn-md btn-primary">Register</button>
    </form><!--FORM Registration -->
</div><!-- col -->
    
@endsection