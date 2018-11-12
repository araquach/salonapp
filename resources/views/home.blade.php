@extends('layouts.main')

@section('head')

@include('layouts.partials.head')
    
@stop
@section('content')
<div class="container">
    
    <h2>Dashboard</h2>

        <div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h3>Welcome {{ Auth::user()->name }}</h4>

            You are logged in!
        </div>
</div>
@endsection
