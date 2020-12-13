<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\PostCats;

class NewsController extends Controller
{
    public function index()
    {
        $postcat = PostCats::where(['status' => 1, 'vi_tri' => 0])->get();
        $blog = Blogs::Where(['status' => 1])->paginate(4);
        return view('client.index', [
           'cate' => $postcat,
           'blog' => $blog,
           'title' => 'Tin Tức',
           'page' => 'news.index'
       ]);
    }

    public function detail($slug)
    {
        $datacats['postcats'] = PostCats::where(['status' => 1, 'vi_tri' => 0])->get();
        $blog = Blogs::where(['slug' => $slug])->first();
        return view('client.index', [
            $datacats,
            'title' => 'Chi Tiết Tin Tức',
            'page' => 'news.detail',
            'blog' => $blog,
        ]);
    }
}
