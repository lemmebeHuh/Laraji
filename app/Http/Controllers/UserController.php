<?php

namespace App\Http\Controllers;

use App\Models\AlbumModel;
use App\Models\ProfileModel;
use App\Models\usermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public function index2()
    {
        $usermodel = new usermodel();
        $db = $usermodel->alldata();
        // dd($db);

        return view('users', compact('db'));
    }

    public function __construct()
    {
        $this->usermodel = new usermodel();
        
    }

    public function delete($id)
    {
        $usermodel = new usermodel();
        $user = $usermodel->deletedata($id);  #problem solved
        $user->delete();
        return redirect ('user');
    }

    public function tambah()
    {
        return view ('tambahuser');
    }

    public function detail($id)
    {
        $usermodel = new usermodel();
        $user = $usermodel->find($id);  #problem solved
        return view ('detailuser', compact('user'));
    }

    public function detailedit($id)
    {
        $usermodel = new usermodel();
        $user = $usermodel->find($id);  #problem solved
        return view ('edituser', compact('user'));
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:3|max:50',
            'jabatan' => 'required',
            'foto' => 'image|mimes:jpg,png,jpeg,gif,svg|max:3048',
        ], [
            'nama.required' => "harus diisi dulu bor",
            'nama.min' => "minimal 3 char",
            'nama.max' => "maximal 50 char",
            
            'foto.image' => "tipenya harus gambar!",
            'foto.mimes' => "foto dalam format jpg, png, jpeg, gif, svg",
            'foto.max' => "Max size 2MB",
        ]);
    
        if ($request->file('foto')) {
            $imgname = $request->nama.'.'.$request->foto->extension();
            $request->foto->move(public_path('asset/img'), $imgname);
        } else {
            $imgname = 'default.png';
        }
    
        $user = new usermodel();
        $data = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $imgname,
        ];
    
        $user->addData($data);
        // dd($user);
        return redirect('/user')->with('status', 'Tambah data success');
    }

    
    public function edit(Request $request , $id)
    {
        if ($request->foto <> "") {
            $imgname = $request->nama.'.'.$request->foto->extension();
            $request->foto->move(public_path('asset/img'), $imgname);
            $data = [
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'foto' => $imgname,
            ];
            $usermodel = new usermodel();
            $user = $usermodel->editdata($data,$id);  #problem solved
        } else {
            $data = [
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
            ];
            $usermodel = new usermodel();
            $user = $usermodel->editdata($data,$id);
        }
        return redirect('/user')->with('status', 'Edit Data success');
    }


    public function index()
    {
        $profileModel = new ProfileModel();
        $db = $profileModel->alldata();
        // dd($db);

        return view('profile', compact('db'));
    }
    
}