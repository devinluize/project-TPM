@extends('layouts.app')
@section('metatag')
    <title>Register</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
@endsection
@section('content')
    <div class="registrasi1">
        <div class="registrasi-child"></div>
        <div class="rectangle-parent6">
            <div class="group-child15"></div>
            <b class="informasi-group">INFORMASI GROUP</b>
            <div class="rectangle-parent7">
                <b class="group-name">Group Name</b>
                <input class="group-child16" type="text" placeholder="Masukkan nama group Anda"
                    style="font-size: 22px;" />
            </div>
            <div class="sudah-punya-akun-container">
                <span>Sudah punya akun? </span><b class="login-disini">
                    <a href="{{ route('login') }}" style="text-decoration: none; color: #3D6BB7;">
                        Login disini
                    </a>
                </b>
            </div>
            <div class="rectangle-parent8">
                <b class="group-name">Password</b>
                <input class="group-child17" type="password" placeholder="Masukkan password Anda"
                    style="font-size: 22px;" />
            </div>
            <div class="rectangle-parent9">
                <b class="group-name">Konfirmasi Password</b>
                <input class="group-child18" type="password" placeholder="Masukkan konfirmasi password Anda"
                    style="font-size: 22px;" />
            </div>
            <div class="category-parent">
                <b class="group-name">Category</b>
                <b class="binusian">Binusian</b>
                <input class="group-child19" type="radio" />
                <b class="non-binusian">Non - Binusian</b>
                <input class="group-child20" type="radio" />
            </div>
        </div>
        <img class="registrasi-item" alt="" />
        <div class="rectangle-parent10">
            <div class="group-child21"></div>
            <div class="rectangle-parent11">
                <div class="group-child22"></div>
                <img class="vector-icon1" alt="" /><img class="bxsfile-image-icon" alt=""
                    src="{{ asset('assets/img/nofile.png') }}" />
                <div class="no-selected-file">No selected File -</div>
            </div>
            <div class="rectangle-parent12">
                <div class="group-child22"></div>
                <img class="vector-icon2" alt="" /><img class="bxsfile-image-icon" alt=""
                    src="{{ asset('assets/img/nofile.png') }}" />
                <div class="no-selected-file">No selected File -</div>
            </div>
            <b class="informasi-leader">INFORMASI LEADER</b>
            <div class="rectangle-parent13">
                <b class="nama-lengkap">Nama Lengkap</b>
                <input class="component-child" type="text" placeholder="Masukkan nama lengkap Anda"
                    style="font-size: 22px;" />
            </div>
            <div class="rectangle-parent14">
                <b class="group-name">Email</b>
                <input class="group-child24" type="text" placeholder="Masukkan email Anda" style="font-size: 22px;" />
            </div>
            <div class="rectangle-parent15">
                <b class="group-name">Whatsapp Number</b>
                <input class="group-child25" type="number" placeholder="Masukkan nomor whatsapp Anda"
                    style="font-size: 22px;" />
            </div>
            <div class="rectangle-parent16">
                <div class="group-child26"></div>
                <img class="vector-icon3" alt="" src="{{ asset('assets/img/trash.png') }}" /><img
                    class="vector-icon4" alt="" src="{{ asset('assets/img/trash.png') }}" /><img
                    class="vector-icon5" alt="" src="{{ asset('assets/img/trash.png') }}" /><img
                    class="bxsfile-image-icon2" alt="" src="{{ asset('assets/img/nofile.png') }}" />
                <div class="no-selected-file2">No selected File -</div>
            </div>
            <div class="rectangle-parent17">
                <div class="group-child27"></div>
                <img class="riupload-cloud-fill-icon" alt="" src="{{ asset('assets/img/upload.png') }}" /><b
                    class="upload-cv">Upload CV</b>
                <input class="browse-files-to" type="file" />
                <div class="only-pdf-jpg">
                    Only PDF, JPG, JPEG and PNG with max size of 2.5 MB
                </div>
            </div>
            <div class="rectangle-parent18">
                <div class="group-child28"></div>
                <b class="upload-cv">Upload Flazz Card</b><img class="riupload-cloud-fill-icon1" alt=""
                    src="{{ asset('assets/img/upload.png') }}" />
                <input class="browse-files-to1" type="file" />
                <div class="only-pdf-jpg-container">
                    <p class="only-pdf-jpg1">Only PDF, JPG, JPEG and PNG</p>
                    <p class="with-max-size">with max size of 2.5 MB</p>
                </div>
            </div>
            <div class="rectangle-parent19">
                <div class="group-child29"></div>
                <b class="upload-cv">Upload ID Card</b><img class="riupload-cloud-fill-icon2" alt=""
                    src="{{ asset('assets/img/upload.png') }}" />
                <input class="browse-files-to2" type="file" />
                <div class="only-pdf-jpg-container1">
                    <p class="only-pdf-jpg1">Only PDF, JPG, JPEG and PNG</p>
                    <p class="with-max-size">with max size of 2.5 MB</p>
                </div>
            </div>
            <div class="rectangle-parent20">
                <b class="group-name">LINE ID</b>
                <input class="group-child24" type="text" placeholder="Masukkan LINE ID Anda"
                    style="font-size: 22px;" />
            </div>
            <div class="rectangle-parent21">
                <b class="group-name">Github/Gitlab</b>
                <input class="group-child31" type="text" placeholder="Masukkan Github/Gitlab Anda"
                    style="font-size: 22px;" />
            </div>
            <div class="frame-div">
                <b class="tempat-lahir">Tempat Lahir</b><b class="tanggal-lahir">Tanggal Lahir</b>
                <input class="frame-child1" type="text" placeholder="Masukkan kota lahir Anda"
                    style="font-size: 22px;" />
                <input class="frame-child2" type="date" placeholder="Masukkan tanggal lahir Anda"
                    style="font-size: 22px;" />
            </div>
            <div class="rectangle-parent22">
                <button class="frame-child3">
                    <p style="color: #ffffff; font-size: 16px; font-weight: 500; margin: 0px;">SUBMIT</p>
                </button>
            </div>
        </div>
    </div>
@endsection
