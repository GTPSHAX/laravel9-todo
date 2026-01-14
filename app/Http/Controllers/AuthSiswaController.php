<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthSiswaController extends Controller
{
    public function index() {
        if (Session::has('siswa'))
        {
            return redirect('/dashboard/siswa');
        }

        return view('auth.siswa');
    }

    public function login(Request $req) {
        $siswa = Siswa::where('nis', $req->nis)->where('kelas', $req->kelas)->first();

        if ($siswa) {
            Session::put('siswa', $siswa);

            return redirect('/dashboard/siswa');
        }

        return redirect('/auth/siswa')->withErrors('Data siswa tidak ditemukan!');
    }
}
