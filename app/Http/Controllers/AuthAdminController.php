<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    public function index() {
        if (Auth::check())
        {
            return redirect('/dashboard/admin');
        }

        
        return view('auth.admin');
    }

    public function login(Request $req) {
        $hasil = Auth::attempt($req->only('username', 'password'));
        if ($hasil) {
            return redirect('/dashboard/admin');
        }
        else {
            return redirect('/auth/admin')->withErrors('Email atau Password salah!');
        }
    }
}
