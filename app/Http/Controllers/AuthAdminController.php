<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthAdminController extends Controller
{
    public function login (Request $req) {
        $user = user::where('role', 'admin')->where('username', $req->username)->first();

        if ($user && Hash::check($req->password, $user->password)) {
            return [
                "message" => "Login berhasil",
                "user" => $user
            ];
        }
        
        return [
            "message" => "Username atau password salah",
            "user"=> null 
        ];
    }
}
