@extends('index')

@section('MainContent')
    <h1>Profile</h1>
        <table class= 'table table-bordered'>
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kontak</th>
                    <th scope="col">Foto</th>
                    
                    <th scope="col" style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($db as $usus)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$usus->id}}</td>
                    <td>{{$usus->nama}}</td>
                    <td>{{$usus->kontak}}</td>
                    <td><img src= "{{asset('asset/img/'.$usus->foto)}}" alt="" width='100px'></td>
                    <td style="text-align: center;">
                        <a href="" class='btn btn-success'>Edit</a>
                        <a href="" class='btn btn-warning'>Detail</a>
                        <a href="" class='btn btn-danger'>Hapus</a>
                    </td>
                </tr>
                
                @endforeach
            </tbody>

        </table>
@endsection