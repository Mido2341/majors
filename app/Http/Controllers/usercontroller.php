<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{
    function index(){
        $users= User::get();
            return view('home',compact('users'));
        }
}
