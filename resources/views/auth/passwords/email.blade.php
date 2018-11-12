@extends('layouts.main')

@section('head')

@include('layouts.partials.head')
    
@stop

@section('content')
<div class="container">
    
    <div >{{ __('Reset Password') }}</div>

    <div>

        @if (session('status'))
            <div role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="field">
                <label class="label" for="email">{{ __('E-Mail Address') }}</label>

                <div class="control">
                    <input class="input" id="email" type="email" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="field">
                <div>
                    <button type="submit" class="button">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </div>
        </form>
               
    </div>
</div>
@endsection
