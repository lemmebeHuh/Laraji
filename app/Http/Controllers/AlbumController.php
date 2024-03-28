<?php

namespace App\Http\Controllers;

use App\Models\AlbumModel;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albumModel = new AlbumModel();
        $db = $albumModel->alldata();
        // dd($db);

        return view('album', compact('db'));
    }

    public function tambah()
    {
        return view ('tambahalbum');
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'Tahun' => 'required',
            'Album' => 'required|min:3|max:50',
            'Album_Artist' => 'required',
            'Genre' => 'required',
            'Foto' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ], [
            'Album.required' => "harus diisi dulu bor",
            'Album.min' => "minimal 3 char",
            'Album.max' => "maximal 50 char",

            'Foto.image' => "tipenya harus gambar!",
            'Foto.mimes' => "foto dalam format jpg, png, jpeg, gif, svg",
            'Foto.max' => "Max size 2MB",
        ]);

        if ($request->file('Foto')) {
            $imgname = $request->album.'.'.$request->Foto->extension();
            $request->Foto->move(public_path('asset/img/album'), $imgname);
        } else {
            $imgname = 'default.png';
        }

        $user = new AlbumModel();
        $data = [
            'Tahun' => $request->Tahun,
            'Album' => $request->Album,
            'Album_Artist' => $request->Album_Artist,
            'Genre' => $request->Genre,
            'Foto' => $imgname,
        ];

        $user->addData($data);
        // dd($user);
        return redirect('/album')->with('status', 'Tambah data success');
    }



    // public function __construct()
    // {
    //     $this->albumModel = new AlbumModel;
    // }
}
