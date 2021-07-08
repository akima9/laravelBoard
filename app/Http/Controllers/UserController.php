<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users/addUser');
    }

    public function store()
    {
        $reqData = request()->only(['userId', 'userPw1', 'userPw2']);
        var_dump($reqData['userId']);
    }

    public function login()
    {
        return view('users/login');
    }

    public function mypage()
    {
        return view('users/mypage');
    }
}
