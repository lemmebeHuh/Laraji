<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class useraji extends Model
{
    public function alldata()
    {
        return DB::table('user')->get();
    }
}




//kakimumemo0
//hahahihihehe0
