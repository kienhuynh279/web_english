<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
// use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }
    public function postLogin(Request $request)
    {
        $arr = ['email' => $request->email, 'password' => $request->password];
        if ($request->remember = 'Remember Me') {
            $remember = true;
        } else {
            $remember = false;
        }
        if (Auth::attempt($arr, $remember)) {
            $request->session()->flash('status', 'đăng nhập Admin thành công !'); // tạo thông báo khi đăng nhập thành công
            return redirect()->intended('/');
            // admin/home
        } else {
            return back()->withInput()->with('error', 'Email hoặc mật khẩu không đúng');
        }
    }
 
}