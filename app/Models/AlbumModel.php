<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class AlbumModel extends Model
{
    public function alldata()
    {
        return DB::table('album')->get();
    }

    public function addData($data)
    {
        return DB::table('album')->insert($data);
    }
}
