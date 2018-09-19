@extends('layouts.site')

@section('content')


    <div class="banner--home crop width--calc">
        <div class="wrap-video">
            <!-- <img src="/imgs/structor/Banner.png" alt="" srcset=""> -->
            <video poster="{{ asset('/imgs/structor/Banner.png') }}" autoplay loop muted tabindex="0">
                <source src="{{ asset('/videos/farina-aprova.mp4') }}" type="video/mp4">
                Seu navegador não suporta o elemento <code>video</code>.
            </video>
        </div>
    </div>

{{-- @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
@endif --}}

@endsection
