@extends('layouts.user')
@section('metatag')
    <title>Timeline</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('user/assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/timeline.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" />
@section('content')
    <div class="timeline">
        <div class="timeline-child"></div>
        <div class="group-div">
            <div class="group-child1"></div>
            <b class="open-registration">
                <p class="open">Open</p>
                <p class="registration">Registration</p>
            </b>
            <div class="sabtu-21-mei-container">
                <p class="open">Sabtu</p>
                <p class="registration">21 Mei 2023</p>
            </div>
        </div>
        <div class="rectangle-parent1">
            <div class="group-child2"></div>
            <b class="technical-meeting">
                <p class="open">Technical</p>
                <p class="registration">Meeting</p>
            </b>
            <div class="senin-23-mei-container">
                <p class="open">Senin</p>
                <p class="registration">23 Mei 2023</p>
            </div>
        </div>
        <div class="rectangle-parent2">
            <div class="group-child3"></div>
            <b class="open-registration">
                <p class="open">Close</p>
                <p class="registration">Registration</p>
            </b>
            <div class="minggu-22-mei-container">
                <p class="open">Minggu</p>
                <p class="registration">22 Mei 2023</p>
            </div>
        </div>
        <div class="rectangle-parent3">
            <div class="group-child3"></div>
            <b class="competition-day">
                <p class="open">Competition</p>
                <p class="registration">Day</p>
            </b>
            <div class="minggu-22-mei-container">
                <p class="open">Selasa</p>
                <p class="registration">24 Mei 2023</p>
            </div>
        </div>
        <img class="timeline-item" alt="" src="{{ asset('user/assets/img/timeline.png') }}" /><b
            class="hackthon">HACKTHON</b>
        <a href="{{ route('user.dashboard') }}" style="text-decoration: none; color: #000000;">
            <div class="dashboard">Dashboard</div>
        </a>
        <a href="{{ route('user.payment') }}" style="text-decoration: none; color: #000000;">
            <div class="payment1">Payment</div>
        </a>
        <a href="{{ route('user.timeline') }}" style="text-decoration: none; color: #000000;">
            <b class="timeline1">Timeline</b>
        </a>
        <b class="logout">Logout</b><b class="timeline2">Timeline</b>
        <div class="register-nav-logo">
            <div class="register-nav-logo-child"></div>
            <div class="dummylogo-png">
                <img class="dummylogotpm-1-icon" alt="" src="{{ asset('assets/img/icon.png') }}" />
            </div>
        </div>
    </div>
@endsection
