<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class usermodel extends Model
{
    public function alldata()
    {
        return DB::table('user')->get();
    }

    public function addData($data)
    {
        return DB::table('user')->insert($data);
    }

    // public function user($id)
    // {
    //     // Assuming you have a User model and a database table 'users'
    //     $user = user::find($id);

    //     if (!$user) {
    //         // Handle user not found scenario (optional)
    //         abort(404); // Or throw an exception
    //     }

    //     return $user;
    // }
    public function find($id)
    {
        return DB::table("user")->where('id',$id)->first();
    }

    public function editdata($data,$id)
    {
        return DB::table('user')
            ->where('id', $id)
            ->update($data);
    }
    
    public function deletedata($data,$id)
    {
        return DB::table('user')
            ->where('id', $id)
            ->delete();
    }
    

}
