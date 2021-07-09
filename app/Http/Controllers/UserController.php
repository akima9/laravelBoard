<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('users/addUser');
    }

    public function show()
    {
        $reqData = request()->only(['userId']);
        var_dump($reqData);
        $data = User::find(reqData['userId']);
        var_dump($data);
    }

    public function store()
    {
        $reqData = request()->only(['userId', 'userPw1', 'userPw2']);
        var_dump($reqData);
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
