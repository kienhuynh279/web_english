<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Models\Users as ModelsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ModelUser;
use App\Models\Banner;
class HomeController extends Controller
{
    public function getHome(){
        return view('admin.index', [
            'data' => [
                'count' => [
                     'user' => ModelUser::count(),
                     'banner' => Banner::count(),
                ]
           ]
        ]);
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->intended('login');
    }
}
