@extends('btemplate')
@section('head','Registration Leader')

@section('body')
    <div class="mb-3">
        <label for="InputNama" class="form-label">Nama Team</label>
        <input type="text" class="form-control" id="InputNama" required>
    </div>
    <div class="mb-3">
        <label for="InputPass" class="form-label">Password</label>
        <input type="password" class="form-control" id="InputPass"
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*-_+=:;,./]).{8,}"
        required>
    </div>
    <div class="mb-3">
        <label for="InputConfPass" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="InputConfPass">
    </div>
    <div class="mb-3 form check">
        <input type="checkbox" class="form-check-input" id="Binusian">
        <label class="form-check-label" for="Binusian">Binusian</label>
    </div>
@endsection
