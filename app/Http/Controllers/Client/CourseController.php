<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class CourseController extends Controller
{
    public function index()
    {
        return view('client.index',[
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
