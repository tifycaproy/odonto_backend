<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class userControlle extends Controller
{
     public function get_all() {
        //return json_decode(DB::Table("Users")->where("rol_id","=","2")->get());
        return json_decode(User::All());
    }
}
