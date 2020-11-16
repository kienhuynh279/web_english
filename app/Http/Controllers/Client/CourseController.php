<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Post;
use App\Models\Blogs;

use App\Models\PostCats;
class CourseController extends Controller
{
    public function index()
    {
        $arr = [];
        $blogs = Blogs::where($arr)->paginate(12);
        return view('client.index',[
            'blogs' => $blogs,
            'title' => 'Docs',
            'page' => 'course.index', 
        ]);
    }

    public function detail()
    {
        return view('client.index', [
            'title' => 'Docs',
            'page' => 'course.detail'
        ]);
    }

    public function list()
    {
        $cateName = PostCats::all();
        return view('client.index', [
            'title' => 'Docs',
            'page' => 'course.list',
            'data' => [
                'cateName' => $cateName
           ]
        ]);
    }
    
    public function getListPost( $slug1, $slug2)
    {
        $postcat = PostCats::where('slug', $slug2)->first();
        $post = Post::where(['id_thepost_cat' => $postcat->id])->get();
        return view('client.index', [
            'title' => 'Tài Liệu Ket',
            'page' => 'course.listpost',
            'data' => [
                'postcat' => $postcat,
                'post' => $post,
           ]
        ]);
    } 
}
