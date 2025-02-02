<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ProfileModel extends Model
{
    public function alldata()
    {
        return DB::table('profile')->get();
    }

    public function addData($data)
    {
        return DB::table('profile')->insert($data);
    }
}
