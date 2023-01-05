@extends('btemplate')
@section('head','Registration Leader')

@section('body')
    <form action="/store-team" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="InputNama" class="form-label">Nama Team</label>
            <input type="text" class="form-control" id="InputNama" name="Nama" required>
        </div>
        <div class="mb-3">
            <label for="InputPass" class="form-label">Password</label>
            <input type="password" class="form-control" id="InputPass" name="Pass" required>
        </div>
        <div class="mb-3">
            <label for="InputConfPass" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="InputConfPass" required>
        </div>
        <div class="mb-3">
            <label for="InputFoto" class="form-label">Profile Picture</label>
            <input type="image" class="form-control" id="InputFoto" name="Foto" required>
        </div>
        <div class="form-check">
            <input class="Input-Binus" type="radio" name="kategori" id="Binus" value="Binusian">
            <label class="Binus-label" for="Binus">
                Binusian
            </label>
        </div>
        <div class="form-check">
            <input class="Input-Binus" type="radio" name="kategori" id="Non-Binus" value="Non-Binusian">
            <label class="Non-Binus-label" for="Non-Binus">
                Non-Binusian
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection
