@extends('pages.master')

@section('logs')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Logowanie</a>
                <!--<a href="{{ url('/register') }}">Register</a>-->
                @endif
            </div>
        @endif
@endsection
@section('content')
        <div class="col-md-6 col-md-offset-3">
            <a href="{{'crud'}}">
                <img src="{{ URL::to('/asset/img/laravel.png') }}" height="70px;">
            </a>
        </div>

        <div style="font-size: 40px; margin-top: 130px; margin-left: 50px;">
            <p style="color: #fff">Laravel`s C.R.U.D.</p>
        </div>
        <div style="font-size: 15px; margin-left: 150px;">
            <a style="color:gray; text-decoration: none;" href="{{ 'aboutme' }}">About Me</a>
            <a style="color:gray; text-decoration: none;" href="{{ 'contact' }}">Contact</a>
        </div>

@endsection
