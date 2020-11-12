<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Post;
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
    
    public function getOnthicc()
    {
        $hight_flg = Post::where('hight_flg',1)->orderBy('id','desc')->take(6)->get();
        return view('client.index', [
            'title' => 'Tài Liệu Ket',
            'page' => 'course.onthicc',
            'data' => [
                'hight_flg' => $hight_flg
           ]
        ]);
    }
    // public function getKET($id)
    // {
    //     $data ['cateName'] = PostCats::find($id);
    //     return view('client.index','client.page.course.KET',$data);
    // }
   
   
}
