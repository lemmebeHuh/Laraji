@extends('index')

@section('MainContent')
    <h1>Profile</h1>
    <a href="/tambahuser" class="btn btn-success">+ Add Data</a>
    <br>
        <table class= 'table table-bordered'>
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Foto</th>
                    
                    <th scope="col" style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($db as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->jabatan}}</td>
                    <td><img src= "{{asset('asset/img/')}}/{{$item->foto}}" alt="" width='100px'></td>
                    <td style="text-align: center;">
                        <a href="/user/detail/{{$item->id}}" class='btn btn-success'>Detail</a>
                        <a href="/user/edit/{{$item->id}}" class='btn btn-warning'>Edit</a>
                        <a href="{{'delete/'.$item->id}}" class='btn btn-danger'>Hapus</a>
                    </td>
                </tr>
                
                @endforeach
            </tbody>

        </table>
@endsection