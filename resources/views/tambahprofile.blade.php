@extends('index')
@section('MainContent')
    <h1>Add User</h1>
    <div class="card">
        <div class="card-header"><h1>Tambah Profile</h1></div>
        <div class="card-body">
            <form action="/kirimprofile" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama" class="form-label">nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="kontak" class="form-label">Kontak</label>
                    <input type="text" name="kontak" id="kontak" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="foto" class="form-label">foto</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <div class="card-footer">
                    <a href="/profile" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>

    @endsection