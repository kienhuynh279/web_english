<?php

namespace App\Http\Controllers\Client;
use App\Models\Banner;
use App\Models\PostCats;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['banner'] = Banner::where('status',1)->get();
        $datacats['postcats']=PostCats::where('status',1)->get();
        return view('client.index',[
            'title' => 'Trang Chủ',
            'page' => 'home.index',$data,$datacats
        ]);
    }

   
}
