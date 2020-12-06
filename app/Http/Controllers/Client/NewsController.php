<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;

class NewsController extends Controller
{
    public function index()
    {
        $blog = Blogs::Where(['status' => 1])->paginate(4);
       return view('client.index',[
           'blog' => $blog,
           'title' => 'Tin Tức',
           'page' => 'news.index'
       ]);
    }

    public function detail($slug)
    {
        $blog = Blogs::where(['slug' => $slug])->first();
        return view('client.index',[
            'title' => 'Chi Tiết Tin Tức',
            'page' => 'news.detail',
            'blog' => $blog,
        ]);
    }
}
