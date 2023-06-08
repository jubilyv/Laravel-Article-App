<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class users extends Controller
{
    //
    function index()
    {
        $users= DB::select("select * from users");
        // return $users;
        return view('users',['users'=>$users]);
    }

}