@extends('layouts.user')
@section('metatag')
    <title>Payment</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('user/assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/payment.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" />
@section('content')
    <div class="penawaran">
        <div class="penawaran-child"></div>
        <div class="rectangle-parent4">
            <div class="group-child5"></div>
            <div class="group-child6"></div>
            <div class="lorem-ipsum-dolor-container">
                <span class="lorem-ipsum-dolor-container1">
                    <p class="lorem-ipsum-dolor">Lorem ipsum dolor sit amet,</p>
                    <p class="lorem-ipsum-dolor">adipiscing elit, sed do incididunt</p>
                    <p class="dolor-conse-adpiscing">
                        dolor conse adpiscing elit.
                    </p>
                </span>
            </div>
            <b class="recommended">RECOMMENDED</b><b class="early-bird">Early Bird</b><b class="rp-200000">RP. 200.000</b>
            <div class="hanya-rp-400000-container">
                <span class="lorem-ipsum-dolor-container1">Hanya <span class="rp-400000">Rp. 400.000</span></span>
            </div>
            <div class="frame-div">
                <button class="frame-child"></button>
                <b class="pilih-paket">Pilih Paket</b>
                <div class="for-binusian-and-container">
                    <span>For </span><b>Binusian</b><span> and </span><b>Non-Binusian</b>
                </div>
            </div>
        </div>
        <div class="rectangle-parent5">
            <div class="group-child7"></div>
            <div class="lorem-ipsum-dolor-container2">
                <span class="lorem-ipsum-dolor-container1">
                    <p class="lorem-ipsum-dolor">Lorem ipsum dolor sit amet,</p>
                    <p class="lorem-ipsum-dolor">adipiscing elit, sed do incididunt</p>
                    <p class="dolor-conse-adpiscing">
                        dolor conse adpiscing elit.
                    </p>
                </span>
            </div>
            <b class="binusian">Binusian</b><b class="rp-380000">RP. 380.000</b>
            <div class="general-price">
                <span class="lorem-ipsum-dolor-container1">Hanya <span class="rp-400000">Rp. 400.000</span></span>
            </div>
            <button class="group-child8"></button>
            <div class="for-binusian-only-container">
                <span>For </span><b>Binusian</b><span> only</span>
            </div>
            <b class="pilih-paket1">Pilih Paket</b>
        </div>
        <div class="rectangle-parent6">
            <div class="group-child7"></div>
            <div class="lorem-ipsum-dolor-container2">
                <span class="lorem-ipsum-dolor-container1">
                    <p class="lorem-ipsum-dolor">Lorem ipsum dolor sit amet,</p>
                    <p class="lorem-ipsum-dolor">adipiscing elit, sed do incididunt</p>
                    <p class="dolor-conse-adpiscing">
                        dolor conse adpiscing elit.
                    </p>
                </span>
            </div>
            <b class="non-binusian">Non-Binusian</b><b class="rp-380000">RP. 400.000</b>
            <div class="general-price">General Price</div>
            <button class="group-child8"></button>
            <div class="for-binusian-only-container">
                <span>For </span><b>Non-Binusian</b><span> only</span>
            </div>
            <b class="pilih-paket1">Pilih Paket</b>
        </div>
        <b class="hackthon1">HACKTHON</b>
        <a href="{{ route('user.dashboard') }}" style="text-decoration: none; color: #000000;">
            <div class="dashboard1">Dashboard</div>
        </a>
        <a href="{{ route('user.payment') }}" style="text-decoration: none; color: #000000;">
            <b class="payment2">Payment</b>
        </a>
        <a href="{{ route('user.timeline') }}" style="text-decoration: none; color: #000000;">
            <div class="timeline3">Timeline</div>
        </a>
        <b class="logout1">Logout</b><b class="payment3">Payment</b>
        <div class="register-nav-logo1">
            <div class="register-nav-logo-item"></div>
            <div class="dummylogo-png1">
                <img class="dummylogotpm-1-icon1" alt="" src="{{ asset('assets/img/icon.png') }}" />
            </div>
        </div>
    </div>
@endsection
