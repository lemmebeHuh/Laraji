@extends('index')
@section('MainContent')
    <h1>Add User</h1>
    <div class="card">
        <div class="card-header"><h1>Tambah data</h1></div>
        <div class="card-body">
            <form action="/kirimalbum" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="Tahun" class="form-label">Tahun</label>
                    <input type="date" name="Tahun" id="Tahun" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Album" class="form-label">Album</label>
                    <input type="text" name="Album" id="Album" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Album_artist" class="form-label">Album artist</label>
                    <input type="text" name="Album_artist" id="Album_artist" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Genre" class="form-label">Genre</label>
                    <input type="text" name="Genre" id="Genre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Foto" class="form-label">Foto</label>
                    <input type="file" name="Foto" id="Foto" class="form-control">
                </div>
                <div class="card-footer">
                    <a href="/album" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>

    @endsection