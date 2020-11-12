<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Blogs;

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
        $data['banner'] = Banner::where('status',1)->get();
        return view('client.index', [
            'title' => 'Docs',
            'page' => 'course.list',$data
        ]);
    }
}
