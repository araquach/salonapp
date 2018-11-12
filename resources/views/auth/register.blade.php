@extends('layouts.main')

@section('head')

@include('layouts.partials.head')
    
@stop

@section('content')
<div class="container">
    
    <h1 class="heading">{{ __('Register') }}</h1>

    <form method="POST" action="{{ route('register') }}">
                        @csrf

        <div class="field">
            <label for="name" class="label">{{ __('Name') }}</label>
            <div class="control">
                <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="field">
            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

            <div class="control">
                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>

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
                <input id="password" type="password" class="input" name="password" required>

                @if ($errors->has('password'))
                    <span role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="field">
            <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

            <div class="control">
                <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
            </div>
        </div>

        <div class="field">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="button">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
</form>
            
</div>
@endsection
