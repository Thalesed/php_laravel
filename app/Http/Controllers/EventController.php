<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('index');
    }

    public function r() {
        return view('r');
    }

    public function su(){
        $user = request('user');
        $pass = request('pass');
        return view('su', ['user' => $user, 'pass' => $pass]);
    }

    public function enter(){
        $user = request('user'); 
        return view('profile', ['user' => $user]);
    }
}
