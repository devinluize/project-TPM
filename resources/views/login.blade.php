@extends('btemplate')
@section('head','Login')

@section('body')
    <form>
        <div class="mb-3">
        <label for="InputGrup" class="form-label">Nama Team</label>
        <input type="text" class="form-control" id="InputGrup">
        </div>
        <div class="mb-3">
        <label for="InputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="InputPassword">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection