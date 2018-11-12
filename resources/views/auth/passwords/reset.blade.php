@extends('layouts.main')

@section('head')

@include('layouts.partials.head')
    
@stop

@section('content')
<div class="container">
    
            
    <h2>{{ __('Reset Password') }}</h2>

    <div>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="field">
                <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                <div class="control">
                    <input id="email" type="email" required autofocus>

                    @if ($errors->has('email'))
                        <span role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="field">
                <label for="password" class="label">{{ __('Password') }}</label>

                <div class="control">
                    <input id="password" type="password" name="password" required>

                    @if ($errors->has('password'))
                        <span role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="field">
                <label for="password-confirm" class="field">{{ __('Confirm Password') }}</label>

                <div class="control">
                    <input id="password-confirm" type="password" name="password_confirmation" required>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
            
    
</div>
@endsection
