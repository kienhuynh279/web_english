<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ModelUser;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
     {
          if (Auth::check()) {
               return redirect()->route('home');
          }

          return view('admin.register');
     }

     public function register(RegisterRequest $req)
     {
          if (!$req->filled([
               'email', 'password',
                'username'
          ])) {

            //    $req->validate([
            //         'email' => 'required',
            //         'password' => 'required',
            //         'passwordAgain' => 'required|same:password',
            //         'username' => 'required',
            //    ]);
               return redirect()->route('registerView')->withInput();
          }

          $user = new ModelUser($req->input());
          $user->password = Hash::make($req->input('password'));
          $user->level = 1;
          $user->Status = 1;
          $user->avatar = 'dist/img/male.jpg';

          try {
               $user->save();
          } catch (\Throwable $th) {
               return redirect()->route('registerView')->withInput()->with(['msg' => 'Đã có lỗi xảy ra khi đăng ký!']);
          }

          return redirect()->route('registerView')->with(['msg' => 'Bạn đã đăng Ký Thành Công!']);
     }
}
