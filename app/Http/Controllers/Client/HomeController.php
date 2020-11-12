<?php

namespace App\Http\Controllers\Client;
use App\Models\Banner;
use App\Models\PostCats;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.index',[
            'title' => 'Trang Chủ',
            'page' => 'home.index'
        ]);
    }

    public function getCategory($id)
    {
    //   $post= Post::where('id_thepost_cat',$id)->orderBy('theposts.id','desc')->paginate(8);
        // $data ['cateName'] = PostCats::find($id);
        return view('client.index', [
            'title' => 'Tài Liệu Ket',
            'page' => 'course.KET',
        //     'data' => [
        //         'post' => $post
        //    ]
        ]);
    }


   
}
