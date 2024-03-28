@extends('index')
@section('MainContent')
    <h1>Detail User</h1>
    <div class="card">
        <div class="card-header"><h1>{{$user->nama}}</h1></div>
        <div class="card-body">
                <div class="form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{$user->nama}}" readonly>
                </div>
                <div class="form-group">
                <label for="jabatan" class="form-label">jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{$user->jabatan}}" readonly>
                </div>
                <div class="form-group">
                    <label for="foto" class="form-label">foto</label>
                    <img src="{{asset('asset/img/')}}/{{$user->foto}}" alt="" width="100px">

                </div>
                <div class="card-footer">
                    <a href="/user" class="btn btn-danger">Kembali</a>
                    <a href="/user/edit/{{$user->id}}" class="btn btn-warning">Edit</a>
                </div>
            </form>
        </div>
    </div>

    @endsection