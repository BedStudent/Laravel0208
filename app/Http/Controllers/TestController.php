<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function profile(){
        $user = [
            'Nothing HereMate',
            'NothingHereMate@gmail.com',
            'NothingMate'
        ];
        return view('profile',compact('user'));
    }

    public function index(){
        return view('index');
    }
    public function pomegiai(){
        return view('pomegiai');
    }
}

