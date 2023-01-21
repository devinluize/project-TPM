@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@section('content')
    <section id="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="heading">
                    <h1>HACKTHON</h1>
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur elit, ed do eiusmod tempor incididunt ut magna aliqua. Ut
                        enim ad minim veniam. </p>
                </div>
                <div class="btn">
                    <div class="sign">
                        <a href="#">SIGN UP</a>
                    </div>
                    <div class="login">
                        <a href="#">LOGIN</a>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('assets/img/MetaverseConnect.png') }}" alt="hero-icon">
            </div>
        </div>
    </section>
    <section id="recap-section"
        style="background-image: url({{ asset('assets/svg/ellipse-one.svg') }}); background-repeat: no-repeat;">
        <div class="container">
            <div class="heading">
                <h4>RECAP TECHNOSCAPE</h4>
            </div>
            <div class="recap-content">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/KAskJvPQk98"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section id="champion">
        <div class="container">
            <div class="heading">
                <h4>CHAMPION PRIZE</h4>
            </div>
            <div class="total">
                <h4>Total Hadiah</h4>
            </div>
        </div>
    </section>
@endsection
