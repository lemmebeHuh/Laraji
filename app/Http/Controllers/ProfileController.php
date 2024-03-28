<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $usermodel = new usermodel();
        $db = $usermodel->alldata();
        // dd($db);

        return view('users', compact('db'));;
    }

    public function __construct()
    {
        $this->kpop = new Kpop;
    }
}
