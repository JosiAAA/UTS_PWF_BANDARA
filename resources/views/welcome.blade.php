@extends('layouts.base')

@section('content')
    <div class="welcome-page">
        @guest
            <h1>Selamat Datang</h1>
            <p>Di Bandara JoAirlines</p>
        @endguest

        @auth
            <h1>Selamat Datang <span id="username">{{ auth()->user()->name }}</span></h1>
            <p>Di Bandara JoAirlines</p>
        @endauth
    </div>
@endsection
