@extends('layouts.user')
@section('metatag')
    <title>Dashboard</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('user/assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" />
@section('content')
    <div class="dahsboard">
        <div class="dahsboard-child"></div>
        <a href="{{ route('user.dashboard') }}" style="text-decoration: none; color: #000000;">
            <b class="dashboard2">Dashboard</b><b class="dashboard3">Dashboard</b>
        </a>
        <a href="{{ route('user.payment') }}" style="text-decoration: none; color: #000000;">
            <div class="payment4">Payment</div>
        </a>
        <a href="{{ route('user.timeline') }}" style="text-decoration: none; color: #000000;">
            <div class="timeline4">Timeline</div>
        </a>
        <b class="logout2">Logout</b>
        <div class="rectangle-parent7">
            <div class="frame-item"></div>
            <div class="rectangle-parent8">
                <div class="group-child11"></div>
                <img class="bxsfile-image-icon" alt="" src="{{ asset('assets/img/nofile.png') }}" />
            </div>
            <div class="rectangle-parent9">
                <div class="group-child11"></div>
                <img class="bxsfile-image-icon" alt="" src="{{ asset('assets/img/nofile.png') }}" />
            </div>
            <div class="githubgitlab-parent">
                <div class="githubgitlab">Github/Gitlab</div>
                <b class="githubcompradikta">github.com/pradikta</b>
            </div>
            <div class="line-id-parent">
                <div class="githubgitlab">LINE ID</div>
                <b class="githubcompradikta">diktawicaksono</b>
            </div>
            <div class="whatsapp-number-parent">
                <div class="whatsapp-number">Whatsapp Number</div>
                <b class="xxxx-xxxx">0821-XXXX-XXXX</b>
            </div>
            <div class="rectangle-parent10">
                <div class="group-child11"></div>
                <img class="bxsfile-image-icon" alt="" src="{{ asset('assets/img/nofile.png') }}" />
            </div>
            <div class="cv">CV</div>
            <div class="flazz-card">Flazz Card</div>
            <div class="id-card">ID Card</div>
        </div>
        <div class="rectangle-parent11">
            <div class="frame-inner"></div>
            <div class="nama-lengkap-parent">
                <div class="nama-lengkap">Nama Lengkap</div>
                <b class="pradikta-wicaksono">Pradikta Wicaksono</b>
            </div>
            <div class="email-parent">
                <div class="nama-lengkap">Email</div>
                <b class="wicaksonodiktagmailcom">wicaksono.dikta@gmail.com</b>
            </div>
            <div class="tempat-tanggal-lahir-parent">
                <div class="nama-lengkap">Tempat, Tanggal Lahir</div>
                <b class="wicaksonodiktagmailcom">Jakarta, 10 Januari 1986</b>
            </div>
            <b class="informasi-leader">INFORMASI LEADER</b>
        </div>
        <div class="rectangle-parent12">
            <div class="frame-child1"></div>
            <b class="anonymous">Anonymous</b>
            <div class="nama-group">Nama Group</div>
            <b class="ubah-foto-profil">Ubah Foto Profil</b>
            <div class="rectangle-parent13">
                <button class="rectangle-button"></button>
                <div class="unverified">Unverified</div>
            </div>
            <img class="ellipse-icon" alt="" src="{{ asset('user/assets/img/default-avatar.png') }}" />
        </div>
        <div class="vector-parent">
            <img class="rectangle-icon" alt="" src="{{ asset('user/assets/img/rectangle.png') }}" /><b
                class="informasi-member">INFORMASI MEMBER</b>
            <div class="john-doe-wrapper">
                <div class="john-doe">John Doe</div>
            </div>
            <div class="john-doe-container">
                <div class="john-doe">John Doe</div>
            </div>
            <div class="john-doe-frame">
                <div class="john-doe">John Doe</div>
            </div>
            <div class="john-doe-wrapper1">
                <div class="john-doe">John Doe</div>
            </div>
            <div class="primary-button">
                <button class="sign-up">ADD MEMBER</button>
            </div>
        </div>
        <div class="register-nav-logo2">
            <div class="register-nav-logo-inner"></div>
            <div class="dummylogo-png2">
                <img class="dummylogotpm-1-icon2" alt="" src="{{ asset('assets/img/icon.png') }}" />
            </div>
        </div>
    </div>
@endsection
