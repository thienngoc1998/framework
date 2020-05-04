<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getFormLoginAdmin()
    {
        return view('backend.layout.login');
    }
    public function loginAdmin(LoginRequest $request)
    {
        $array = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($array))
        {
            return redirect()->route('admin-dashboard');
        } else {
           return redirect()->back()->withErrors('Tài khoản hoặc mật khâủ không đúng')->withInput();
        }
    }

    public function dashboard()
    {
        return view('backend.layout.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin-login-form');
    }
}
