@extends('btemplate')
@extends('bts_navbar')

@section('head','Payment')

@section('brand','Payment')

@section('body')
    <div>
        <div id="EB_General">
            Penjelasan tentang early bird dan general
        </div>
        <form>
            <div class="mb-3">
            <label for="InputRek" class="form-label">Nomor Rekening</label>
            <input type="text" class="form-control" id="InputRek" required>
            </div>
            <div class="mb-3">
            <label for="InputBank" class="form-label">Bank</label>
            <input type="text" class="form-control" id="InputBank" required>
            </div>
            <div class="mb-3">
                <label for="InputNama" class="form-label">Atas Nama</label>
                <input type="text" class="form-control" id="InputNama" required>
            </div>
            <div class="mb-3">
                <label for="InputNama" class="form-label">Atas Nama</label>
                <input type="text" class="form-control" id="InputNama" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    
@endsection