<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function getBannerHome()
    {
        $data['banner'] = Banner::where('status',1)->get();
        return view('client.index',[
            'title' => 'Trang Chủ',
            'page' => 'home.index',$data
        ]);
        
    }
}
