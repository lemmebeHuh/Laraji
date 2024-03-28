@extends('index')

@section('MainContent')
    

    <h1>Album Data</h1>
    <a href="/tambahalbum" class="btn btn-success">+ Add Data</a>
    <br>
    <table class= 'table table-bordered'>
        <thead>
            <tr style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Tahun</th>
                <th scope="col">Album</th>
                <th scope="col">Album Artist</th>
                <th scope="col">Genre</th>
                <th scope="col">Pic</th>
                <!-- <th scope="col" style="text-align: center;">Action</th> -->
            </tr>
        </thead>
        <tbody >
            @foreach($db as $asus)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td style="text-align: center;">{{$asus->ID}}</td>
                <td style="text-align: center;">{{$asus->Tahun}}</td>
                <td>{{$asus->Album}}</td>
                <td>{{$asus->Album_Artist}}</td>
                <td>{{$asus->Genre}}</td>
                <td style="text-align: center;"><img src= "{{asset('asset/img/album/'.$asus->Foto)}}" alt="" width='100px'></td>
                <!-- <td style="text-align: center;">
                    <a href="" class='btn btn-success'>Edit</a>
                    <a href="" class='btn btn-warning'>Detail</a>
                    <a href="" class='btn btn-danger'>Hapus</a>
                </td> -->
            </tr>
            @endforeach
        </tbody>

    </table>
@endsection

