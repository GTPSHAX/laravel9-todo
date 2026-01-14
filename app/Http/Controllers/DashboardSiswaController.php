<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardSiswaController extends Controller
{
    public function index() {
        if (Session::has('siswa'))
        {
            return redirect('/dashboard/siswa');
        }

        return view('auth.siswa');
    }
}
