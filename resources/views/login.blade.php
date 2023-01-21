@extends('layouts.app')
@section('metatag')
    <title>Login</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endsection
@section('content')
    <form action="" method="post">
        @csrf
        <div class="login1">
            <div class="login-child"></div>
            <div class="login-item"></div>
            <b class="login2">LOGIN</b>
            <div class="nama-group-parent">
                <b class="nama-group">Nama Group</b>
                <input class="masukkan-nama-group-anda-wrapper" type="text"
                    placeholder="Masukkan nama group Anda"style="font-size: 22px;" />
            </div>
            <div class="password-parent">
                <b class="password1">Password</b>
                <input class="masukkan-password-anda-wrapper" type="password" placeholder="Masukkan password Anda"
                    style="font-size: 22px;" />
            </div>
            <div class="belum-punya-akun-container">
                <span>Belum punya akun? </span><b class="daftar-disini">
                    <a href="{{ route('register') }}" style="text-decoration: none; color: #3D6BB7;">Daftar disini</a>
                </b>
            </div>
            <button class="primary-button4"><b class="nama-group">LOGIN</b></button>
        </div>
    </form>

@endsection
