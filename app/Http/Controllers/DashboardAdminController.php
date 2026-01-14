<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function index() {
        if (!Auth::check()) {
            return redirect('/auth/admin');
        }

        return view('dashboard.admin');
    }
}
