<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usermodel;

class userscon extends Controller
{
    public function index()
    {
        $profileModel = new ProfileModel();
        $db = $profileModel->alldata();
        // dd($db);

        return view('users', compact('db'));
    }

    public function __construct()
    {
        $this->profileModel = new ProfileModel;
    }
}
