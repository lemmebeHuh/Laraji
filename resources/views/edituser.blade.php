@extends('index')
@section('MainContent')
    <h1>Edit Data User</h1>
    <div class="card">
        <div class="card-header"><h1>Edit Data</h1></div>
        <div class="card-body">
            <form action="/edituser/{{$user->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama" class="form-label">nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{$user->nama}}" required>
                </div>
                <div class="form-group">
                    <label for="jabatan" class="form-label">jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{$user->jabatan}}" required>
                </div>
                <div class="form-group">
                    <label for="foto" class="form-label">Foto</label>
                    <img src="{{asset('asset/img')}}/{{$user->foto}}" alt="" width="100px">
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <div class="card-footer">
                    <a href="/user" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>

    @endsection