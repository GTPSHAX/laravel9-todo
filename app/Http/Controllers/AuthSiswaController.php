<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthSiswaController extends Controller
{
    public function login (Request $req) {
        $user = User ::where('role', 'siswa')->where('nis', $req->nis)->where('kelas',$req->kelas)->first();

        if ($user) {
            return [
                "message" => "Login berhasil",
                "user" => $user
            ];
        }
        
        return [
            "message" => "data tidak ditemukan",
            "user"=> null 
        ];
    }
}
