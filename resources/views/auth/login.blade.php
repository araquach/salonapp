@extends('layouts.main')

@section('head')

@include('layouts.partials.head')
    
@stop

@section('content')

<div class="container">
    <h1 class="heading">Login Form</h1>

                    
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="field">
            <label class="label" for="email">{{ __('E-Mail Address') }}</label>

            <div class="control">
                <input class="input" type="email" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span>
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="field">
            <label class="label" for="password">{{ __('Password') }}</label>

            <div class="control">
                <input class="input" type="password" name="password" required>

                @if ($errors->has('password'))
                    <span>
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input class="checkbox" type="checkbox" name="remember">

                <label class="label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        <div class="field">
            <button class="button" type="submit">
                {{ __('Login') }}
            </button>

            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        </div>
    </form>
</div>
@endsection
